<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'membername',
		'gender',
		'contactnumber',
		'email',
		'LRN',
		'profession',
		'department',
		'subject',
		'livingaddress',
		'photo',
		'timestatus'

	];

	protected $dates = ['deleted_at'];


}
