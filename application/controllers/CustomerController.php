<?php

class CustomerController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('CustomerModel');
                $this->load->library('session');
	}
	
	public function index(){
		$data['content']="customer/index";
                $data['var_listCustomers'] = $this->CustomerModel->listCustomers();
		$this->load->view("template", $data);
	}
        
        public function insert(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                if ($dates['txtName'] == "" and $dates['txtSurname'] == "" and $dates['dtBirthday'] == "") {
                    # Show menssage of mistake
                    echo 'Required field!!!';
                }
                else {
                    $txtName = $dates['txtName'];
                    $txtSurname = $dates['txtSurname'];
                    $dtBirhday = $dates['dtBirthday'];
                    $this->CustomerModel->insertCustomer($txtName,$txtSurname,$dtBirhday);
                    redirect('CustomerController/index');                    
                }
            }
        }
        
         public function edit($id = NULL){
            if ($id != NULL) {
                $data['content']='customer/edit';
                $data['datesCustomer']= $this->CustomerModel->editCustomer($id);
                $this->load->view('template', $data);
            } else {
                redirect('CustomerController/index');
            }
         }
        
        public function update(){
            $dates = $this->input->post();
            
            if (isset($dates)) {
                $txtIdCustomer = $dates['txtIdCustomer'];
                $txtName = $dates['txtName'];
                $txtSurname = $dates['txtSurname'];
                $dtBirthday = $dates['dtBirthday'];
                $this->CustomerModel->updateCustomer($txtIdCustomer,$txtName,$txtSurname,$dtBirthday);
                redirect('CustomerController/index');
            }
        }
        
        public function listMeasurementxCustomer($id = NULL){
            if ($id != NULL) {
            $data['content']="customer/measurementxCustomer";
//            $data['NameC']=$NameC;
//            $data['SurnameC']=$SurnameC;
            $data['idCustomer']=$id;
            $data['datesMeasuremxCust']=$this->CustomerModel->listMeasurement($id);
            $this->load->view('template', $data);
            } else {
                redirect('CustomerController/index');
            }
        }
        
        public function insertMeasurement() {
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                if ($dates['txtIdCustomer'] == "") {
                    # Show menssage of mistake
                    echo 'Required field!!!';
                }
                else {
                    $txtIdCustomer = $dates['txtIdCustomer'];
                    $txtWeight = $dates['txtWeight'];
                    $txtHeight = $dates['txtHeight'];
                    $dtDate = $dates['txtDate'];
                    $this->CustomerModel->insertMeasurement($txtIdCustomer,$txtWeight,$txtHeight,$dtDate);
                    redirect('CustomerController/listMeasurementxCustomer'); //falta retornar a la controlador con el id del cliente                   
                }
            }
        }
}