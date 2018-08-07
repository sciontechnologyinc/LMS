<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookissue extends Model
{
    protected $table = 'bookissue';
    protected $fillable =  ['bookname',
                            'ISBN',
                            'memberid'];


}
