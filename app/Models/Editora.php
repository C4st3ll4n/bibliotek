<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = "editora";
    protected $fillable = ["nome"];

    public function relBooks(){
        return $this->hasMany('App\Models\Book','idEditora', 'id');
    }
}
