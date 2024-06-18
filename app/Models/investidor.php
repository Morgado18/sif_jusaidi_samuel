<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investidor extends Model
{
    use HasFactory;
    protected $table = "investidores";
    protected  $guarded= [];
}

