<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    protected $fillable = ['title', 'description', 'due date', 'user_id', 'priority_id', 'department_id', 'status_id'];

    use HasFactory;

    // user-task eloquent relationship def
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // priority-task eloquent relationship def
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
