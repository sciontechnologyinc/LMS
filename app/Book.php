<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable =  ['bookname',
                            'yearpublish',
                            'ISBN',
                            'booknumber',
                            'bookprice',
                            'writername',
                            'categoryname',
                            'status',
                            'booktype',
                            'bookcondition',
                            'details',
                            'digitalphoto'
                        ];

}
