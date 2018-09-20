<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookissue extends Model
{
    protected $table = 'bookissues';
    protected $fillable =  ['bookname',
                            'ISBN',
                            'name',
                            'booknumber',
                            'bookprice',
                            'writername',
                            'date_from',
                            'name',
                            'date_to',
                            'hour_from',
                            'hour_to',
                            'difference',
                            'hours',
                            'status',
                            'bookholder'];


                            
}

