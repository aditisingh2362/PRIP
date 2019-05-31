<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    public function user(){
	return $this->belongsTo(\App\User::class);
}
public function commentproposal(){
    return $this->hasMany(\App\commentproposal::class);
}
public function likeproposal(){
    return $this->hasMany(\App\likeproposal::class);
}
}
