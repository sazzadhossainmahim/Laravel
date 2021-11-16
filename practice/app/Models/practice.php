<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practice extends Model
{
    use HasFactory;
    // add database manually
    protected $table = 'posts';
}
