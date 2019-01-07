<?php

namespace App\Services;


use App\Models\Order;

class OrderService extends BaseService
{
	protected $model;

	public function __construct (Order $model) 
	{
		parent::__construct($model);
	}
	
}