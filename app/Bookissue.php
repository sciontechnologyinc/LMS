<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Bookissue extends Model
{
    use SoftDeletes;
    protected $table = 'bookissues';
    protected $fillable =  ['bookname',
                            'ISBN',
                            'name',
                            'booknumber',
                            'bookprice',
                            'writername',
                            'comments',
                            'date_from',
                            'name',
                            'date_to',
                            'hour_from',
                            'hour_to',
                            'difference',
                            'hours',
                            'status',
                            'bookholder'];

    protected $dates = ['deleted_at'];


                            
}

