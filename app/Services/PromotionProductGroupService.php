<?php

namespace App\Services;


use App\Models\PromotionProductGroup;

class PromotionProductGroupService extends BaseService
{
	protected $model;

	public function __construct (PromotionProductGroup $model) 
	{
		parent::__construct($model);
	}
	
}