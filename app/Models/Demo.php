<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    /** @use HasFactory<\Database\Factories\DemoModelFactory> */
    use HasFactory;

    protected $table = 'demo';
}
