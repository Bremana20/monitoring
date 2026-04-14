<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkProgram extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function assignees()
    {
        return $this->belongsToMany(User::class, 'assignments');
    }

    public function progressHistories()
    {
        return $this->hasMany(ProgressHistory::class);
    }

    public function weeklyTargets()
    {
        return $this->hasMany(WeeklyTarget::class);
    }
}
