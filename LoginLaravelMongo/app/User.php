<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';

    //NOTE we need to declare the varibles name's of the input form in order to be sended by the controller into the database
    protected $fillable = ['userName', 'userEmail', 'userPassword','userPrivilege'];



    //NOTE this avoid autoinsert from eloquent of update and mofify date
    public $timestamps = false;

}
