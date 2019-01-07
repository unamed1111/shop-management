<?php

namespace App\Services;


use App\Models\Product;

class ProductService extends BaseService
{
	protected $model;

	public function __construct (Product $model) 
	{
		parent::__construct($model);
	}
	
}