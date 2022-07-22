<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla con la cual el modelo se relaciona 
    protected $table= "continents"; 
    //la clave primaria de dicha tabla 
    protected $primaryKey="continent_id";
    //anular capos de auditoria
    public $timestamps = false; 
    use HasFactory;
}
