<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Category extends Model
{
    use Translatable;

    protected $translatable = ['name', 'title', 'meta_description'];

    public function parentId() {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function child() {
        return $this->hasMany(self::class, 'parent_id');
    }
}
