<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Section extends Model
{
	protected $fillable = [
		'sectionname'
	];

	protected $dates = ['deleted_at'];


}
