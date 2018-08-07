<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalsettings extends Model
{
    protected $table = 'generalsettings';
    protected $fillable =  ['systemname',
                            'systememail',
                            'systemcontactno',
                            'uploadsystemlogo',
                            'uploadfavicon',
                            'address',
                            'about',
                            'mission',
                            'vision'];

}
