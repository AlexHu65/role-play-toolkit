<?php

/**
 * All data from the monsters table
 * Class Monsters_model
 */

class Monsters_model extends CI_Model
{

    public function __construct()
    {
        //Here is loaded the race model to obtain the race according each monster
        $this->load->model('Race_model');
        $this->load->database();
    }

    /**Return data from only one monster or all monsters
     * @param bool $id
     * @return mixed
     */

    public function get_monster($id = FALSE)
    {

        if ($id === FALSE) {
            //if does not exists the id, return all monsters

            $query = $this->db->get('Monsters');
            $monsters = $query->result_array();

            for ($i = 0; $i < count($monsters); $i++) {
                //search for the id race to obtain from the race model
                $monsters[$i]['race'] = $this->Race_model->get_race($monsters[$i]['id_race']);
            }

            return $monsters;
        }

        //return only one monster

        $query = $this->db->get_where('Monsters', array('id' => $id));
        $monster = $query->row_array();
        $monster['race'] = $this->Race_model->get_race($monster['id_race']);

        return $monster;


    }

    /**Delete the monster
     * @param bool $id
     * @return mixed
     */

    public function delete_monster($id = FALSE)
    {
        $this->db->where('id', $id);
        return $this->db->delete('monsters');
    }

    /**
     * Insert new monster
     * @param $data
     * @return bool
     */


    public function insert_monster($data)
    {
        if (!empty($data)) {
            return $this->db->insert('Monsters', $data);
        }
        return false;
    }

    /**
     * Update monster
     * @param bool $id
     * @return bool
     */

    public function update_monster($id, $data)
    {
        if(empty($id) || empty($data)){
            return 'data is empty';
        }

        $updateData  = [
            'id' => $id,
            'id_race' => $data['race'],
            'name' => $data['name'],
            'level' => $data['level'],
        ];


        $this->db->where('id', $id);
        return $this->db->update('Monsters', $updateData);


    }
}
