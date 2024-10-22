<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class ChangesHistory extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'changes_history';

    protected $fillable = [
        'user_id',
        'project_id',
        'comment',
    ];
}
