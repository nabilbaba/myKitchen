<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
     protected $table = 'commentaires' ;

    protected $fillable = [
        'recette_id','nom','email','message'];

    public function recette()
    {
        return $this->belongsTo('App\Recette');
    }
}
