<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_BaseController {


	public function index()
	{
		$data['tittle'] = 'Me la pelan';

    $this->load->view('templates/main' , $data);


	}
}
