<?php
class Race_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_race($id)
{
        $query = $this->db->get_where('Race', array('id' => $id));
        $race = $query->row_array();

        return $race['name'];
}
}
