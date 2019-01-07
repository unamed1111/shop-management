<?php

namespace App\Services;


use App\Models\CustomerGroup;

class CustomerGroupService extends BaseService
{
	protected $model;

	public function __construct (CustomerGroup $model) 
	{
		parent::__construct($model);
	}
	
}