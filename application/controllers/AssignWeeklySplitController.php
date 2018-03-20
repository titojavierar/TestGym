<?php

class AssignWeeklySplitController extends CI_Controller{
    
    function __construct(){
		parent::__construct();
		$this->load->model('Customer_WeeklySplitModel');
                $this->load->model('WeeklySplitModel');
                $this->load->library('session');
	}
        
        public function listWSxCustomer($idCu = NULL){
            $data['content']="customer/weeklySxCustomer"; 
            $data['var_listWeeklySplis'] = $this->WeeklySplitModel->listWeeklySplit();
            $data['idCustomer']=$idCu;
            //$this->session->flashdata('FullNameCustomer') = $value->Name." ".$value->Surname;
            $data['datesCustomer_WeeklySplit']=$this->Customer_WeeklySplitModel->listCustomer_WeeklySplit($idCu);            
            $this->load->view("template", $data);
        }
        
        public function insertWSxCustomer(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                $txtId_Customer = $dates['txtId_Customer'];
                $sltId_Split = $dates['sltId_Split'];                
                $txtStart_Date = $dates['txtStart_Date']; 
                $var_insert = $this->Customer_WeeklySplitModel->insertCustomer_WeeklySplit($txtId_Customer,$sltId_Split,$txtStart_Date);
                if ($var_insert) {
                    redirect(base_url().'AssignWeeklySplitController/listWSxCustomer/'.$txtId_Customer,  301); 
                }else{
                    $this->session->set_flashdata('ControllerMessage', 'The customer has already assigned this weekly split!!');
                    redirect(base_url().'AssignWeeklySplitController/listWSxCustomer/'.$txtId_Customer,  301);
                }
            }
        }
        
}
