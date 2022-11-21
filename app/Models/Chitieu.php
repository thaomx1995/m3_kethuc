<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitieu extends Model
{
    use HasFactory;
    protected $table = 'chitieu';

    protected $fillable = [
        'danhmuc',
        'ngay',
        'sotien',


    ];
}
