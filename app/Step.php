<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['herb_id', 'step'];

    public $timestamps = false;

    public function herbs() {
        return $this->belongsTo('App\Herb');
    }
}
