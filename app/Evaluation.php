<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = 'commentaires' ;

    protected $fillable = [
        'recette_id','nombre_etoiles'];

    public function recette()
    {
        return $this->belongsTo('App\Recette');
    }
}
