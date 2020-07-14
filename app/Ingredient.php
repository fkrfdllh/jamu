<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['herb_id', 'ingredient'];

    public $timestamps = false;

    public function herbs() {
        return $this->belongsTo('App\Herb');
    }
}
