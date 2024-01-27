<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ListPrice extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

}
