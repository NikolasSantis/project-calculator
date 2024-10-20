<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangesHistory extends Model
{
    use HasFactory;

    protected $table = 'changes_history';

    protected $fillable = [
        'user_id',
        'project_id',
        'comment',
    ]; 
}
