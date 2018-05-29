<?php

/**
 * All data race
 * Class Race_model
 */

class Race_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_race($id = FALSE)
    {
        /**
         * Obtain all data race data
         */

        if ($id === FALSE) {
            //if does not exists the id, return all monsters
            $query = $this->db->get('Race');
            $race = $query->result_array();
            return $race;
        }

        /**
         * If not there it the function to obtain only one row
         */

        $query = $this->db->get_where('Race', array('id' => $id));
        $race = $query->row_array();

        return $race['name'];
    }

}
