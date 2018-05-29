<?php


defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created to create new item , either monsters or heroes
 * Class NewItem
 */

class NewItem extends MY_BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Abilities_model');
        $this->load->model('Race_model');
        $this->load->model('Monsters_model');
        $this->load->helper('url_helper');

    }

    /**
     * New item controller route
     */

    public function index()
    {
        if (isset($_POST['type'])) {
            $type = $_POST['type'];


            if ($type == 'monster') {

                /**
                 * Detect if the type is a monster
                 */

                $data = '';
                /**
                 * Search for all values of the form
                 */
                foreach ($_POST as $key => $value) {

                    //AND NOW SAVED THEM
                    $data[] = $value;
                }
                /***
                 * Obtain the data from the model
                 */

                $listAbilities = $this->getAbilities();

                for ($i = 0; $i < count($listAbilities); $i++) {
                    foreach ($data as $value) {
                        if ($listAbilities[$i]['name'] == $value) {
                            $selectedAbilities[] = ['id' => $listAbilities[$i]['id'], 'name' => $listAbilities[$i]['name']];
                        }
                    }
                }
            }
            if ($this->addMonster($_POST)) {
                echo "<script type='application/javascript'>alert('Monster added')</script>";
            }

        }

        $data['title'] = 'New item';
        if ($this->getAbilities()) {
            $data['abilities'] = $this->getAbilities();
        }

        if ($this->getRace()) {
            $data['race'] = $this->getRace();
        }

        $this->load->view('modules/newitem', $data);
        $this->load->view('templates/footer.php');
    }

    /**
     * Get all abilities
     * @return mixed
     */

    public function getAbilities()
    {
        return $this->Abilities_model->getAbilities();

    }

    /**
     * Get the race
     * @return mixed
     */

    public function getRace()
    {
        return $this->Race_model->get_race();

    }

    /**
     * Add a monster
     * @param $data
     */

    public function addMonster($data)
    {
        $monsterData = [
            'id_race' => $data['race'],
            'name' => $data['name'],
            'level' => $data['level'],
            'picture' => $data['race'],

        ];
        return $this->Monsters_model->insert_monster($monsterData);

    }



}