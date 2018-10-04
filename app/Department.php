<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Department extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'departmentname'
	];

	protected $dates = ['deleted_at'];


}
