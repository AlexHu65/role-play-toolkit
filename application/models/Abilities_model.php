<?php

/**
 * Model to retrive all data from the abilities
 * Class Abilities_model
 */
class Abilities_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }


    public function getAbilities($id = FALSE)
    {
        if ($id === FALSE)
        {
            //if does not exists the id, return all monsters
            $query = $this->db->get('Abilities');
            $abilities = $query->result_array();

            return $abilities;
        }

    }

    public function getAbilitiesMonsters($id = FALSE)
    {

    }
}