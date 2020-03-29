<?php
class Api_model extends CI_Model
{
 function fetch_all()
 {
    $query=$this->db->query("SELECT * FROM indonesia order BY id")->result();
    return $query;
 }

 function insert_api($data)
 {
  $this->db->insert('indonesia', $data);
  if($this->db->affected_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function fetch_single_user($id)
 {
  $this->db->where("id", $id);
  $query = $this->db->get('indonesia');
  return $query->result_array();
 }
 function update_api($id, $data)
 {
  $this->db->where("id", $id);
  $this->db->update("indonesia", $data);
 }
 
 function delete_single_user($id)
 {
  $this->db->where("id", $id);
  $this->db->delete("indonesia");
  if($this->db->affected_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }
}
?>