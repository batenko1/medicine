<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class AboutSlider extends Model
{
    use Translatable;

    protected $translatable = ['name'];
}
