<?php

namespace App\Services;


use App\Models\Customer;

class CustomerService extends BaseService
{
	protected $model;

	public function __construct (Customer $model) 
	{
		parent::__construct($model);
	}
	
}