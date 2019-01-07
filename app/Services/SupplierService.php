<?php

namespace App\Services;


use App\Models\Supplier;

class SupplierService extends BaseService
{
	protected $model;

	public function __construct (Supplier $model) 
	{
		parent::__construct($model);
	}
	
}