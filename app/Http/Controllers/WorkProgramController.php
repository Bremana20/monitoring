<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkProgram;
use App\Models\WeeklyTarget;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class WorkProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $query = WorkProgram::with('creator');

        if (auth()->user()->isStaf()) {
            $query->where('created_by', auth()->id());
        }

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $workPrograms = $query->paginate(10);

        return view('work-programs.index', compact('workPrograms', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('work-programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:belum_selesai,sedang_proses,selesai',
            'uraian' => 'required|string',
            'realisasi_minggu_ini' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'target_minggu_berikut' => 'nullable|string',
        ]);

        $workProgram = WorkProgram::create([
            'name' => $request->name,
            'description' => null,
            'status' => $request->status ?: 'belum_selesai',
            'created_by' => auth()->id(),
        ]);

        // Create weekly target
        $workProgram->weeklyTargets()->create([
            'uraian' => $request->uraian,
            'realisasi_minggu_ini' => $request->realisasi_minggu_ini,
            'keterangan' => $request->keterangan,
            'target_minggu_berikut' => $request->target_minggu_berikut,
            'created_by' => auth()->id(),
        ]);

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'create_work_program',
            'description' => 'Created work program: ' . $workProgram->name,
        ]);

        return redirect()->route('program-kerja.index')->with('success', 'Program kerja berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $workProgram = WorkProgram::with('creator', 'progressHistories.user', 'assignments.user', 'weeklyTargets')->findOrFail($id);

        // Check permission
        if (auth()->user()->isStaf() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        return view('work-programs.show', compact('workProgram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $workProgram = WorkProgram::findOrFail($id);

        // Check permission: staf can edit own, kabag can edit all
        if (auth()->user()->isStaf() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        return view('work-programs.edit', compact('workProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $workProgram = WorkProgram::findOrFail($id);

        // Check permission
        if (auth()->user()->isStaf() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:belum_selesai,sedang_proses,selesai',
            'uraian' => 'required|string',
            'realisasi_minggu_ini' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'target_minggu_berikut' => 'nullable|string',
        ]);

        $workProgram->update([
            'name' => $request->name,
            'status' => $request->status ?: 'belum_selesai',
        ]);

        // Update or create weekly target
        $workProgram->weeklyTargets()->updateOrCreate(
            ['work_program_id' => $workProgram->id],
            [
                'uraian' => $request->uraian,
                'realisasi_minggu_ini' => $request->realisasi_minggu_ini,
                'keterangan' => $request->keterangan,
                'target_minggu_berikut' => $request->target_minggu_berikut,
                'created_by' => auth()->id(),
            ]
        );

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'update_work_program',
            'description' => 'Updated work program: ' . $workProgram->name,
        ]);

        return redirect()->route('program-kerja.index')->with('success', 'Program kerja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workProgram = WorkProgram::findOrFail($id);

        // Check permission: staf can delete own, kabag can delete all
        if (auth()->user()->isStaf() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'delete_work_program',
            'description' => 'Deleted work program: ' . $workProgram->name,
        ]);

        $workProgram->delete();

        return redirect()->route('program-kerja.index')->with('success', 'Program kerja berhasil dihapus.');
    }

    /**
     * Assign a user to the work program.
     */
    public function assignUser(Request $request, WorkProgram $workProgram)
    {
        // Check permission: only kabag or program creator can assign
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        // Check if user is already assigned
        if ($workProgram->assignments()->where('user_id', $request->user_id)->exists()) {
            return redirect()->back()->with('error', 'Pengguna sudah ditugaskan ke program ini.');
        }

        $workProgram->assignments()->create([
            'user_id' => $request->user_id,
        ]);

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'assign_user',
            'description' => 'Assigned user to work program: ' . $workProgram->name,
        ]);

        return redirect()->back()->with('success', 'Pengguna berhasil ditugaskan ke program kerja.');
    }

    /**
     * Unassign a user from the work program.
     */
    public function unassignUser(WorkProgram $workProgram, User $user)
    {
        // Check permission: only kabag or program creator can unassign
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        $assignment = $workProgram->assignments()->where('user_id', $user->id)->first();

        if (!$assignment) {
            return redirect()->back()->with('error', 'Pengguna tidak ditugaskan ke program ini.');
        }

        $assignment->delete();

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'unassign_user',
            'description' => 'Unassigned user from work program: ' . $workProgram->name,
        ]);

        return redirect()->back()->with('success', 'Pengguna berhasil dilepas dari tugas program kerja.');
    }

    /**
     * Show the form for creating a new weekly target.
     */
    public function createWeeklyTarget(WorkProgram $workProgram)
    {
        // Check permission: only kabag or program creator can create targets
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        return view('work-programs.weekly-targets.create', compact('workProgram'));
    }

    /**
     * Store a newly created weekly target in storage.
     */
    public function storeWeeklyTarget(Request $request, WorkProgram $workProgram)
    {
        // Check permission: only kabag or program creator can create targets
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'uraian' => 'required|string',
            'realisasi_minggu_ini' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'target_minggu_berikut' => 'nullable|string',
        ]);

        $workProgram->weeklyTargets()->create([
            'uraian' => $request->uraian,
            'realisasi_minggu_ini' => $request->realisasi_minggu_ini,
            'keterangan' => $request->keterangan,
            'target_minggu_berikut' => $request->target_minggu_berikut,
            'created_by' => auth()->id(),
        ]);

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'create_weekly_target',
            'description' => 'Created weekly target for work program: ' . $workProgram->name,
        ]);

        return redirect()->route('program-kerja.show', $workProgram)->with('success', 'Target mingguan berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified weekly target.
     */
    public function editWeeklyTarget(WorkProgram $workProgram, WeeklyTarget $weeklyTarget)
    {
        // Check permission: only kabag or program creator can edit targets
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        // Ensure the weekly target belongs to the work program
        if ($weeklyTarget->work_program_id !== $workProgram->id) {
            abort(404);
        }

        return view('work-programs.weekly-targets.edit', compact('workProgram', 'weeklyTarget'));
    }

    /**
     * Update the specified weekly target in storage.
     */
    public function updateWeeklyTarget(Request $request, WorkProgram $workProgram, WeeklyTarget $weeklyTarget)
    {
        // Check permission: only kabag or program creator can update targets
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        // Ensure the weekly target belongs to the work program
        if ($weeklyTarget->work_program_id !== $workProgram->id) {
            abort(404);
        }

        $request->validate([
            'uraian' => 'required|string',
            'realisasi_minggu_ini' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'target_minggu_berikut' => 'nullable|string',
        ]);

        $weeklyTarget->update([
            'uraian' => $request->uraian,
            'realisasi_minggu_ini' => $request->realisasi_minggu_ini,
            'keterangan' => $request->keterangan,
            'target_minggu_berikut' => $request->target_minggu_berikut,
        ]);

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'update_weekly_target',
            'description' => 'Updated weekly target for work program: ' . $workProgram->name,
        ]);

        return redirect()->route('program-kerja.show', $workProgram)->with('success', 'Target mingguan berhasil diperbarui.');
    }

    /**
     * Remove the specified weekly target from storage.
     */
    public function destroyWeeklyTarget(WorkProgram $workProgram, WeeklyTarget $weeklyTarget)
    {
        // Check permission: only kabag or program creator can delete targets
        if (!auth()->user()->isKabag() && $workProgram->created_by !== auth()->id()) {
            abort(403);
        }

        // Ensure the weekly target belongs to the work program
        if ($weeklyTarget->work_program_id !== $workProgram->id) {
            abort(404);
        }

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'delete_weekly_target',
            'description' => 'Deleted weekly target from work program: ' . $workProgram->name,
        ]);

        $weeklyTarget->delete();

        return redirect()->route('program-kerja.show', $workProgram)->with('success', 'Target mingguan berhasil dihapus.');
    }

}
