<?php

namespace App\Services;


use App\Models\Producer;

class ProducerService extends BaseService
{
	protected $model;

	public function __construct (Producer $model) 
	{
		parent::__construct($model);
	}
	
}