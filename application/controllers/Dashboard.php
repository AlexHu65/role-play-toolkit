<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dashboard extends from a core controller base
 * Class Dashboard
 */
class Dashboard extends MY_BaseController
{


    public function index()
    {
        $data['tittle'] = 'Me la pelan';

        //It loads the main view
        $this->load->view('templates/main', $data);


    }
}
