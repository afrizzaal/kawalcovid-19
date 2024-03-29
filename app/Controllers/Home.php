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

	public function covid19_nasional()
	{
		$provinsi = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
		$data = [
			'title' => 'Sebaran Kasus Covid-19 Nasional',
			'provinsi' => $provinsi,
			'isi' => 'covid19_nasional',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function global()
	{
		$global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
		$positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
		$sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
		$meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
		$data = [
			'title' => 'Data Covid-19 Global',
			'global' => $global,
			'positif' => $positif,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
			'isi' => 'v_global',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function covid19_global()
	{
		$global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
		$data = [
			'title' => 'Sebaran Kasus Covid-19 Global',
			'global' => $global,
			'isi' => 'covid19_global',
		];
		echo view('layout/v_wrapper', $data);
	}
}
