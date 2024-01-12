<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'family',
        'field_of_Study',
        'academic_rank',
        'educational_group',
        'college'
    ];
}
