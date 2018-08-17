<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookissue extends Model
{
    protected $table = 'bookissues';
    protected $fillable =  ['bookname',
                            'datehour',
                            'memberid'];


}
