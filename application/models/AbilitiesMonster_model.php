<?php

/**
 * Model to obtain abilities according monster
 * Class AbilitiesMonster_model
 */
class AbilitiesMonster_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }


    public function getAbilitiesMonster($id = FALSE)
    {
        if ($id === FALSE) {
            //if does not exists the id, return all monsters
            $query = $this->db->get('Abilities');
            $abilities = $query->result_array();
            return $abilities;
        }
    }

    public function setAbilitiesMonsters($id = FALSE)
    {

    }
}