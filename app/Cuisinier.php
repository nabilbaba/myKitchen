<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cuisinier extends Model
{
	protected $primaryKey = 'user_id';
    protected $table = 'cuisiniers' ;

    protected $fillable = [
        'user_id','first_name','last_name','email','num','date_of_birth','code_postal','adresse'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
