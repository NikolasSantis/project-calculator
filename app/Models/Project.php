<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'projects';

    protected $fillable = [
        'user_id',
        'name',
        'total_cost',
        'type_id',
        'status_id',
        'description',
        'total_time',
    ];
}
