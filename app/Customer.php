<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email',
    ];
    public function phone(){
//        return $this->hasOne('App\Phone');
        return $this->hasOne(Phone::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
