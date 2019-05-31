<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function proposal(){
    return $this->hasMany(\App\proposal::class);
}
public function petition(){
    return $this->hasMany(\App\petition::class);
}
public function commentpetition(){
    return $this->hasMany(\App\commentpetition::class);
}
public function likepetition(){
    return $this->hasMany(\App\likepetition::class);
}
public function commentproposal(){
    return $this->hasMany(\App\commentproposal::class);
}
public function likeproposal(){
    return $this->hasMany(\App\likeproposal::class);
}
}
