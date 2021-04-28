<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisinier extends Model
{
	

    protected $fillable = [
        'user_id','first_name','last_name','email','num','date_of_birth','code_postal','adresse','created_at','updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
