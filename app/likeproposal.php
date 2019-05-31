<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likeproposal extends Model
{
   public function user(){
	return $this->belongsTo(\App\User::class);
}
public function proposal(){
    return $this->belongsTo(\App\proposal::class);
}
}
