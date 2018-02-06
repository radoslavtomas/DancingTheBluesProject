<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function getStartDateAttribute($value)
	{
		return date("F j, Y", strtotime($value));
	}

	public function getEndDateAttribute($value)
	{
		return date("F j, Y", strtotime($value));
	}


}
