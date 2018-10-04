<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $table = 'reservations';
    protected $fillable =  ['LRN',
                            'membername',
                            'bookname',
                            'message',
                        ];
	protected $dates = ['deleted_at'];


}
