<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    protected $fillable = ['user_id', 'name', 'image', 'description'];

    public $timestamps = false;

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function ingredients() {
        return $this->hasMany('App\Ingredient');
    }

    public function steps() {
        return $this->hasMany('App\Step');
    }
}
