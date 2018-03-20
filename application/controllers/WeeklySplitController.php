<?php

class WeeklySplitController extends CI_Controller{
	
	function __construct(){
            parent::__construct();
            $this->load->model('WeeklySplitModel');
            $this->load->model('RoutineModel');
	}
	
	public function index(){
		$data['content']="weeklySplit/index";
                $data['var_listWeeklySplis'] = $this->WeeklySplitModel->listWeeklySplit();
                $data['var_sltRoutine'] = $this->RoutineModel->listRoutine();
		$this->load->view("template", $data);
	}
        
        public function insert(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                    $txtName_Split = $dates['txtName_Split'];
                    $txtDay1_Id_Routine = $dates['sltDay1_Id_Routine'];
                    $txtDay2_Id_Routine = $dates['sltDay2_Id_Routine'];
                    $txtDay3_Id_Routine = $dates['sltDay3_Id_Routine'];
                    $txtDay4_Id_Routine = $dates['sltDay4_Id_Routine'];
                    $txtDay5_Id_Routine = $dates['sltDay5_Id_Routine'];
                    $txtDay6_Id_Routine = $dates['sltDay6_Id_Routine'];
                    $txtDay7_Id_Routine = $dates['sltDay7_Id_Routine'];
                    $this->WeeklySplitModel->insertWeeklySplit($txtName_Split,$txtDay1_Id_Routine,$txtDay2_Id_Routine,$txtDay3_Id_Routine,$txtDay4_Id_Routine,$txtDay5_Id_Routine,$txtDay6_Id_Routine,$txtDay7_Id_Routine);
                    redirect('WeeklySplitController/index');
            }
        }
        
//         public function edit($id = NULL){
//            if ($id != NULL) {
//                $data['content']='weeklySplit/edit';
//                $data['datesWeeklySplit']= $this->WeeklySplitModel->editWeeklySplit($id);
//                $this->load->view('template', $data);
//            } else {
//                redirect('WeeklySplitController/index');
//            }
//         }
        
//        public function update(){
//            $dates = $this->input->post();
//            
//            if (isset($dates)) {
//                $txtId_Split = $dates['txtId_Split'];
//                $txtName_Split = $dates['txtName_Split'];
//                $txtDay1_Id_Routine = $dates['txtDay1_Id_Routine'];
//                $txtDay2_Id_Routine = $dates['txtDay2_Id_Routine'];
//                $txtDay3_Id_Routine = $dates['txtDay3_Id_Routine'];
//                $txtDay4_Id_Routine = $dates['txtDay4_Id_Routine'];
//                $txtDay5_Id_Routine = $dates['txtDay5_Id_Routine'];
//                $txtDay6_Id_Routine = $dates['txtDay6_Id_Routine'];
//                $txtDay7_Id_Routine = $dates['txtDay7_Id_Routine'];
//                $this->WeeklySplitModel->updateWeeklySplit($txtId_Split,$txtName_Split,$txtDay1_Id_Routine,$txtDay2_Id_Routine,$txtDay3_Id_Routine,$txtDay4_Id_Routine,$txtDay5_Id_Routine,$txtDay6_Id_Routine,$txtDay7_Id_Routine);
//                redirect('WeeklySplitController/index');
//            }
//        }
}

