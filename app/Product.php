<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Product extends Model
{

    use Translatable, Resizable;

    public $translatable = ['title', 'meta_title', 'meta_description', 'short_description', 'manufacturer', 'country', 'text'];

    public function categoryId() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function categoryIdList() {
        return Category::query()->whereNotNull('parent_id')->get();
    }

    public function attributes() {
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }

}
