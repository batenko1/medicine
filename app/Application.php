<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Application extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'product'
    ];
}
