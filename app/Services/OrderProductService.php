<?php

namespace App\Services;


use App\Models\OrderProduct;

class OrderProductService extends BaseService
{
	protected $model;

	public function __construct (OrderProduct $model) 
	{
		parent::__construct($model);
	}
	
}