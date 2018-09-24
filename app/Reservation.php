<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable =  ['LRN',
                            'membername',
                            'bookname',
                            'message',
                        ];

}
