<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empreendedor extends Model
{
    use HasFactory;
    protected $table = "empreendedores";
    protected  $guarded= [];
}
