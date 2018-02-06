<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public function album(){
		return $this->belongsTo('App\Album');
	}
}
