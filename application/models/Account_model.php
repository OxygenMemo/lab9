<?php   
class Account_model extends CI_Model {
    public function list_all_account() {
        $result = $this->db->get('Account');
        return $result->result_array();
    }
}
?>