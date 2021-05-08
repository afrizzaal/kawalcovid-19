<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Covid-19 Nasional',
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper', $data);
	}
}
