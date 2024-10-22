<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class ProjectStatus extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'project_status';
    
    protected $fillable = [
        'name',
        'description',
    ];
}
