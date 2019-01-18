<?php

namespace App\Services;


use App\Models\ProductGroup;

class ProductGroupService extends BaseService
{
	protected $model;

	public function __construct (ProductGroup $model) 
	{
		parent::__construct($model);
	}
	
}

?>