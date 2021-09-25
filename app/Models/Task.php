<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $attributes = [
        'task_name',
        'priority',
        'expiration_date',
        'is_done'
    ];

    protected $fillables = [
        'task_name',
        'priority',
        'expiration_date',
        'is_done'
    ];
}
