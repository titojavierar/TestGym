<?php

class CustomerModel extends CI_Model {
	
    function __construct(){
            parent::__construct();
            $this->load->database();
    }

    public function insertCustomer ($Name, $Surname, $Birthday){
        $arrayDates = array(
            'Name' => $Name,
            'Surname' => $Surname,
            'Birthday' => $Birthday
        );
        
        $this->db->insert('tbl_customer',$arrayDates);
    }
    
    public function listCustomers (){
        $query = $this->db->query("SELECT * FROM tbl_customer");
        return $query->result();
    }
    
    public function editCustomer($id){
        $query = $this->db->query("SELECT * FROM tbl_customer c WHERE c.id_Customer = $id");
        return $query->result();
    }
    
    public function updateCustomer($txtIdCustomer,$txtName,$txtSurname,$dtBirthday){
        $array = array(
            'Name' => $txtName,
            'Surname' => $txtSurname,
            'Birthday' => $dtBirthday
        );
        $this->db->where('id_Customer',$txtIdCustomer);
        $this->db->update('tbl_customer', $array);
    }
    
    public function listMeasurement($id_Customer){
        $query = $this->db->query("SELECT * FROM tbl_measurement m WHERE m.tbl_Customer_id_Customer = $id_Customer");
        return $query->result();
    }
    
    public function insertMeasurement ($IdCustomere, $Weight, $Height, $Date){
        $arrayDates = array(
            'tbl_Customer_id_Customer'=>$IdCustomere,
            'Weight' => $Weight,
            'Height' => $Height,
            'Date' => $Date
        );
        $this->db->insert('tbl_measurement',$arrayDates);
    }
}