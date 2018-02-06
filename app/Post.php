<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function getCreatedAtAttribute($value)
	{
//		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->toFormattedDateString();
		return date("F j, Y", strtotime($value));
	}

	public function author()
	{
		return $this->belongsTo('App\User');
	}
}
