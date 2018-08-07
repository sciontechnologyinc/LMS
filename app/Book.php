<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'addbooks';
    protected $fillable =  ['bookname',
                            'ISBN',
                            'booknumber',
                            'bookprice',
                            'writername',
                            'category as categoryname',
                            'status',
                            'booktype',
                            'bookcondition',
                            'details'];

}
