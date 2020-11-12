<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 //Responsavl por fazer integraçoes com o banco de dados e suas tabelas
class Modelo extends Model
{
    protected $fillable = [
        'modelo' ,
        'status'
    ];
}
