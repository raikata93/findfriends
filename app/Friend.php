<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';
 	protected $fillable = ['friends_id', 'fr1', 'fr2', 'status', 'seen', 'accepted_notif'];

 	public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
