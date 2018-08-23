<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable =  ['bookname',
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
