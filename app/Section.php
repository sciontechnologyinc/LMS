<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Section extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'sectionname'
	];

	protected $dates = ['deleted_at'];


}
