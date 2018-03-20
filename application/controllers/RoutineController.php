<?php

class RoutineController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('RoutineModel');
                $this->load->library('session');
	}
	
	public function index(){
		$data['content']="routine/index";
                $data['var_listRoutines'] = $this->RoutineModel->listRoutine();
		$this->load->view("template", $data);
	}
        
        public function insert(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                $txtName_Routine = $dates['txtName_Routine'];
                $txtAmount_Exercise = $dates['txtAmount_Exercise'];                
                $this->RoutineModel->insertRoutine($txtName_Routine,$txtAmount_Exercise);
                redirect('RoutineController/index'); 
            }
        }
        
//         public function edit($id = NULL){
//            if ($id != NULL) {
//                $data['content']='routine/edit';
//                $data['datesRoutine']= $this->RoutineModel->editRoutine($id);
//                $this->load->view('template', $data);
//            } else {
//                redirect('RoutineController/index');
//            }
//         }
        
//        public function update(){
//            $dates = $this->input->post();
//            
//            if (isset($dates)) {
//                $txtIdRoutine = $dates['txtIdRoutine'];
//                $txtName_Routine = $dates['txtName_Routine'];
//                $txtAmount_Exercise = $dates['txtAmount_Exercise'];  
//                $this->RoutineModel->updateRoutine($txtIdRoutine,$txtName_Routine,$txtAmount_Exercise);
//                redirect('RoutineController/index');
//            }
//        }
        
        public function listExercisexRoutine($idRou = NULL){
            $data['content']="routine/exercisexRoutine";
            $data['var_selExercise']=$this->RoutineModel->selExercise();
            $data['idRoutine']=$idRou;
            $data['datesExercisexRoutine']=$this->RoutineModel->listExercisexRoutine($idRou);
            //$data['var_listExercise'] = $this->ExerciseModel->listExercise();
            $this->load->view("template", $data);
        }
        
        public function insertExercisexRoutine(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                $tbl_Exercise_Id_Exercise = $dates['sltIdExercise'];
                $tbl_Routine_Id_Routine = $dates['txtIdRoutine'];                
                $Amount_Sets = $dates['txtAmount_Sets'];                
                $Reps = $dates['txtReps'];
                $var_insert = $this->RoutineModel->insertExercisexRoutine($tbl_Exercise_Id_Exercise,$tbl_Routine_Id_Routine,$Amount_Sets,$Reps);
                if ($var_insert) {
                    redirect(base_url().'RoutineController/listExercisexRoutine/'.$tbl_Routine_Id_Routine,  301); 
                }else{
                    $this->session->set_flashdata('ControllerMessage', 'The routine has already assigned this exercise!!');
                    redirect(base_url().'RoutineController/listExercisexRoutine/'.$tbl_Routine_Id_Routine,  301);
                }
                //redirect('RoutineController/index'); 
            }
        }
}

