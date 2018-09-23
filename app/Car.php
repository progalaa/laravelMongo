<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Car extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cars';


    protected $guarded =['id'];
}
