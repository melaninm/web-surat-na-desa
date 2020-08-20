<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Data_model extends CI_Model
{
  function getPrestasi() 
    {
        
        $query = "SELECT `prestasi`.*, `user`.*

        		FROM `prestasi` JOIN `user`
        		ON `prestasi`.`id_user` = `user`.`username`


        		";

        return $this->db->query($query)->result_array();
    }  
}
?>