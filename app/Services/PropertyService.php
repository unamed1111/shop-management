<?php

namespace App\Services;


use App\Models\Property;

class PropertyService extends BaseService
{
	protected $model;

	public function __construct (Property $model) 
	{
		parent::__construct($model);
	}
	
}