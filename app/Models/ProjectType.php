<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class ProjectType extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'project_types';
    
    protected $fillable = [
        'name',
    ];
}
