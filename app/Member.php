<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
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
		'photo'

	];

}
