<?php
class Monsters_model extends CI_Model {

  public function __construct()
  {
    $this->load->model('Race_model');
    $this->load->database();
  }

  public function get_monster($id = FALSE)
  {

    if ($id === FALSE)
    {
      //if doen´t exists the id, return all monsters

      $query = $this->db->get('Monsters');
      $monsters = $query->result_array();

      for ($i=0; $i < count($monsters) ; $i++) {
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


  public function delete_monster($id = FALSE)
  {

    $this->db->where('id', $id);
    return $this->db->delete('monsters');
  }
}
