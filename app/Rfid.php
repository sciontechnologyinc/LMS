<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
    protected $table = 'rfids';
    protected $fillable = [ 
                    'studentid',
                    'studentname',
                    'timestatus',
                    'status'
    ];
}
