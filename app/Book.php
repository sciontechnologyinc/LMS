<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    protected $table = 'books';
    protected $fillable =  ['bookname',
                            'yearpublish',
                            'publisher',
                            'ISBN',
                            'booknumber',
                            'bookprice',
                            'writername',
                            'categoryname',
                            'section',
                            'status',
                            'booktype',
                            'bookcondition',
                            'details',
                            'digitalphoto'
                        ];
	protected $dates = ['deleted_at'];


}
