<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    //we define a database connection
    protected $connection = 'mongodb';
    //we define an array with text with noon treatmemt 
    protected $fillable = [
        'string', 'number', 
    ];

}
