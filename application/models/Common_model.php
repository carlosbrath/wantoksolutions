<?php if (!defined('BASEPATH')) exit('No direct script  allow');

class Common_model extends CI_Model
{

    function select_all($select, $table)
    {
        $this->db->select($select);
		$this->db->from($table);
		$query =  $this->db->get();
		return $query->result();
    }
    function select_where($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query =  $this->db->get();
		return $query->result();
	}
    function insert_array($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
    function update_array($where, $table, $data)
	{
		$this->db->where($where);
		$query = $this->db->update($table, $data);
		if ($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
