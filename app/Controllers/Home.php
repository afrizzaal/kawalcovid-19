<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), true);
		$provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
		$data = [
			'title' => 'Data Covid-19 Nasional',
			'nasional' => $nasional,
			'provinsi' => $provinsi,
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper', $data);
	}
}
