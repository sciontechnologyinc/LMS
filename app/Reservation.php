<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable =  ['LRN',
                            'membername',
                            'bookname',
                            'message',
                        ];
	protected $dates = ['deleted_at'];


}
