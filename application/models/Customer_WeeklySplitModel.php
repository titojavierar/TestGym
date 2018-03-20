<?php

class Customer_WeeklySplitModel extends CI_Model{
    function __construct(){
            parent::__construct();
            $this->load->database();
    }
    
    public function listCustomer_WeeklySplit ($id_Customer){
        $query = $this->db->query("SELECT * FROM tbl_customer_has_tbl_weeklysplit cw inner join tbl_weeklysplit ws on cw.tbl_WeeklySplit_Id_Split = ws.Id_Split  WHERE cw.tbl_Customer_id_Customer = $id_Customer");
        return $query->result();
    }
    
    public function insertCustomer_WeeklySplit ($tbl_Customer_id_Customer,$tbl_WeeklySplit_Id_Split, $Start_Date){
        
        $sql = $this->db->query("SELECT * FROM tbl_customer_has_tbl_weeklysplit cw WHERE cw.tbl_Customer_id_Customer = $tbl_Customer_id_Customer and cw.tbl_WeeklySplit_Id_Split = $tbl_WeeklySplit_Id_Split");
        
        if ($sql->num_rows() > 0) {
            return false;
        } else {
            $arrayDates = array(
            'tbl_Customer_id_Customer' => $tbl_Customer_id_Customer,
            'tbl_WeeklySplit_Id_Split' => $tbl_WeeklySplit_Id_Split,
            'Start_Date' => $Start_Date
            );
        
            $this->db->insert('tbl_customer_has_tbl_weeklysplit',$arrayDates);
            return true;
        }
        
    }
}

