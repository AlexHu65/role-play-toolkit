<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monsters extends MY_BaseController {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('Monsters_model');
								$this->load->helper('url_helper');
        }


	public function index()
	{

		$data['monsters'] = $this->Monsters_model->get_monster();
		$this->load->view('modules/monsters' , $data);

	}

	public function getmonster($id = 0)
	{
			$data['monster'] = $this->Monsters_model->get_monster($id);
			$this->load->view('modules/monsters' , $data);


		}

		public function delete($id){

				$this->Monsters_model->delete_monster($id);
				return true;


		}
}
