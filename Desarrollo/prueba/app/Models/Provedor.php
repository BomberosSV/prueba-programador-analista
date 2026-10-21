<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $table = "provedores";
    protected $fillable = ['nombre', 'telefono', 'telefono_representante', 'representante'];
}
