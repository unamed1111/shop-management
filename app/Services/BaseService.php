<?php

namespace App\Services;


class BaseService
{
	protected $model;

	public function __construct($model) 
	{
		$this->model = $model;
	}

}