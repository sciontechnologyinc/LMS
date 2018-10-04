<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Rfid extends Model
{
    protected $table = 'rfids';
    protected $fillable = [ 
                    'studentid',
                    'studentname',
                    'timestatus',
                    'status'
    ];
	protected $dates = ['deleted_at'];

}
