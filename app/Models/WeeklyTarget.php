<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeeklyTarget extends Model
{
    protected $fillable = [
        'work_program_id',
        'uraian',
        'realisasi_minggu_ini',
        'keterangan',
        'target_minggu_berikut',
        'created_by'
    ];

    public function workProgram(): BelongsTo
    {
        return $this->belongsTo(WorkProgram::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
