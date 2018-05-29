<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monsters extends MY_BaseController
{

    /**
     * Added all models required
     * Monsters constructor.
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Monsters_model');
        $this->load->model('Race_model');
        $this->load->helper('url_helper');

    }

    /**
     * It loads all monsters if is not received one id
     * BASE_URL/monsters/
     */

    public function index()
    {
        if (isset($_POST['id'])) {
            //If is sending the delete action from the list od monsters
            if (isset($_POST['action']) && $_POST['action'] == 'delete') {
                if ($this->delete($_POST['id'])) {
                    echo 'Monster deleted';
                } else {
                    echo 'Something is wrong';
                }
            }
        } else {

            //Here is saved all monsters
            $data['monsters'] = $this->Monsters_model->get_monster();

            //And returned all to respective view
            $this->load->view('modules/monsters', $data);
        }
    }

    /**
     * Only return one monster according the id
     * @param int $id
     */

    public function getmonster($id = 0)
    {
        /**
         * Receiving the data id
         */
        if (isset($_POST['id'])) {
            //Here is the model loaded
            $this->update($_POST['id'], $_POST);
        }
        $data['monster'] = $this->Monsters_model->get_monster($id);
        if ($this->getRace()) {
            $data['race'] = $this->getRace();
        }


        $this->load->view('modules/monsters', $data);
        $this->load->view('templates/footer.php');


    }

    /**
     * Get the race of the monster
     * @return mixed
     */

    public function getRace()
    {
        return $this->Race_model->get_race();

    }

    /**
     * Delete selected monster
     * @param $id
     * @return bool
     */

    public function delete($id)
    {
        $this->Monsters_model->delete_monster($id);
        return true;
    }

    /**
     * Update using the model
     * @param $id
     * @param $data
     * @return bool
     */

    public function update($id, $data)
    {
        return $this->Monsters_model->update_monster($id, $data);


    }


}
