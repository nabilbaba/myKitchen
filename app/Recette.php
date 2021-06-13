<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
     protected $table = 'recettes' ;

    protected $fillable = ['titre','etapes','cuisinier_id','categorie_id','temps_de_preparation','temps_de_cuisson','niveau'];

    public function cuisinier()
    {
        return $this->belongsTo('App\Cuisinier');
    }

    
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
    public function ingredient()
    {
        return $this->hasMany('App\Ingredient');
    }
    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }

    public function evaluation()
    {
        return $this->hasMany('App\Evaluation');
    }
    
}
