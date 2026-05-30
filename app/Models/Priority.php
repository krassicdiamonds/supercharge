<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    /** @use HasFactory<\Database\Factories\PriorityFactory> */
    protected $fillable = ['priority'];

    use HasFactory;

    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
