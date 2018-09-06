<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookissue extends Model
{
    protected $table = 'bookissues';
    protected $fillable =  ['bookname',
                            'date_from',
                            'date_to',
                            'hour_from',
                            'hour_to'];


                            
}

