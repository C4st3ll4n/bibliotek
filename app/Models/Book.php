<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "acervo";
    protected $fillable = ["titulo","idEditora","preco","tipo","quantidade","ano","autor"];


    public function relEditora()
    {
        return $this->hasOne('App\Models\Editora','id', "idEditora");
    }
}
