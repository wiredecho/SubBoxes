<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Box extends CI_Model{

    
    function recent_activity(){
       $query = $this->db->query("SELECT box.id as box_id, box.title, user.screenname, user.id as user_id FROM box LEFT JOIN user ON box.user_id=user.id");
       return $query->result_array();
    }
    function create_a_box($box){
       $id = $this->session->userdata("user_session")['id'];
       $query = "INSERT INTO box (title, filename, content, price, created_at, user_id) VALUES (?, ?, ?, ?, now(), ?)";
       $values = array($box['title'], $box['filename'], $box['content'], $box['price'], $id);
       $this->db->query($query, $values);
       return $this->db->query("SELECT * FROM box WHERE title = '{$box['title']}'")->row_array();
   }

    function view_box($id){
      $query = ('SELECT * FROM box WHERE id = ?');
      return $this->db->query($query, $id)->row_array();
    }

}