<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petition extends Model
{
    public function user(){
	return $this->belongsTo(\App\User::class);
}
public function commentpetition(){
    return $this->hasMany(\App\commentpetition::class);
}
public function likepetition(){
    return $this->hasMany(\App\likepetition::class);
}
}
