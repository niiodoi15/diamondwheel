<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trends extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "category",
        "writeup",
        "photo"
    ];
}
