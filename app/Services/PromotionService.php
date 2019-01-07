<?php

namespace App\Services;


use App\Models\Promotion;

class PromotionService extends BaseService
{
	protected $model;

	public function __construct (Promotion $model) 
	{
		parent::__construct($model);
	}
	
}