<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Post;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//        relaciòn uno a uno
    public function profile(){
        return $this->hasOne(Profile::class);
    }

//        relaciòn uno a muchos
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
    public function videos(){
        return $this->hasMany('App\Models\Video');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
//    polimofrica 1-1
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
    public function tes(){
        $numero = '25';
        $numero2 = 23;
        var_dump($numero);
    }


//    protected function name(): Attribute
//    {
//        return new Attribute(
//            get: fn ($value) => ucwords($value),
//
//            set: function ($value) {
//                return strtolower($value)
//            }
//        );
//    }

//    public function setNameAttribute($value){
//        $this->attributes['name'] = strtolower($value);
//    }


















}
