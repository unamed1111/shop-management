<?php

namespace App\Services;

use App\Models\Attribute;

class AttributeService extends BaseService
{
	protected $model;

	public function __construct(Attribute $model)
	{
		parent::__construct($model);
	} 
}