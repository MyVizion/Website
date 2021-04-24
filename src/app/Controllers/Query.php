<?php

namespace App\Controllers;

class Query extends BaseController
{
    public $query;
	public function index()
	{
        return $this->query = "SELECT * FROM `profiles` WHERE id = ? AND userName = ?";
    }
}