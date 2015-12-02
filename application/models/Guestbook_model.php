<?php

class Guestbook_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    
    function view()
    {
        $sql = "SELECT * FROM comments ORDER BY comment_id DESC";
        $query = $this->db->query( $sql );
	return $query->result_array();
    }
    
    function insert( $data = array() ) {
	$data["name"] = $this->db->escape_str($data["name"]);
	$data["email"] = $this->db->escape_str($data["email"]);
	$data["comment"] = $this->db->escape_str($data["comment"]);
	$data["name"] = htmlspecialchars( $data["name"] );
	$data["email"] = htmlspecialchars( $data["email"] );
	$data["comment"] = htmlspecialchars( $data["comment"] );
	$sql = "INSERT INTO comments (comment_id, name, email, comment) VALUES ('null', '". $data["name"] ."', '". $data["email"] ."', '". $data["comment"] ."')";
	return $this->db->query( $sql );
}
}