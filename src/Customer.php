<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    public $fillable = [
        'name',
        'type',
    ];
}
