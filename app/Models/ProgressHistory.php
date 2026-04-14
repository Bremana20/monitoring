<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressHistory extends Model
{
    protected $fillable = [
        'work_program_id',
        'user_id',
        'status',
        'description',
    ];

    public function workProgram()
    {
        return $this->belongsTo(WorkProgram::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
