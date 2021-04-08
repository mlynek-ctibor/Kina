<?php

namespace App\Controllers;

class Home extends BaseController
{

	
	public function zacatek()
	{
		echo view("head");
		echo view("text");
	}
}
