<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    
    protected $table = 'ingredients' ;

    protected $fillable = [
        'recette_id','nom_produit','quantité','unité'];

    public function recette()
    {
        return $this->belongsTo('App\Recette');
    }
}


