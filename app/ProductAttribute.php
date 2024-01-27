<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class ProductAttribute extends Model
{
    use Translatable;

    protected $translatable = ['caption', 'title', 'value'];

    public function parentId() {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function child() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function productId() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
