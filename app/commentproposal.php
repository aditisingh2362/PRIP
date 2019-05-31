<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentproposal extends Model
{
    public function user(){
	return $this->belongsTo(\App\User::class);
}

public function proposal(){
    return $this->belongsTo(\App\proposal::class);
}
}
