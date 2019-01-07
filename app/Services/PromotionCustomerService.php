<?php

namespace App\Services;


use App\Models\PromotionCustomer;

class PromotionCustomerService extends BaseService
{
	protected $model;

	public function __construct (PromotionCustomer $model) 
	{
		parent::__construct($model);
	}
	
}