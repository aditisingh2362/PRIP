<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentpetition extends Model
{
   public function user(){
	return $this->belongsTo(\App\User::class);
}

public function petition(){
    return $this->belongsTo(\App\petition::class);
}
}
