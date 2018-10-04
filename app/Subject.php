<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Subject extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'subjectname'
	];

	protected $dates = ['deleted_at'];

}
