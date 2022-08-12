<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
       //la tabla con la cual el modelo se relaciona 
       protected $table= "languages"; 
       //la clave primaria de dicha tabla 
       protected $primaryKey="language_id";
       //anular capos de auditoria
       public $timestamps = false; 
    use HasFactory;

    //Relacion M:M con paises (Countries)
    public function paises(){
        //BelongsToMany: Parametros
        //1 El model a relacionar
        //2 La tabla pivot 
        //3 La FK del model actual en el pivot 
        //4 La clave foranea del modelo a relacionar en el pivot
        return $this->belongsToMany(Country::class, 'Country_languages','language_id','country_id')->withPivot('official');
    }
}
