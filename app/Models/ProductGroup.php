<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ProductGroup extends Model
{
	use NodeTrait;
	protected $table = 'product_groups';
    protected $fillable = [
        'name', 'parent_id'
    ];

    // public function parent()
    // {
    // 	return $this->belongsTo('App\Models\ProductGroup', 'parent_id');
    // } 

    // public function childrens()
    // {
    // 	return $this->hasMany('App\Models\ProductGroup', 'parent_id');
    // }
}