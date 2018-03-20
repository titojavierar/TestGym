<?php

class ExerciseController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('ExerciseModel');
	}
	
	public function index(){
		$data['content']="exercise/index";
		$data['var_selSkill_level']=$this->ExerciseModel->selSkill_level();
                $data['var_listExercise'] = $this->ExerciseModel->listExercise();
                $this->load->view("template", $data);
	}
        
        public function insert(){
            $dates = $this->input->post();
            
            if (isset($dates)) {
                $txtIdSkilLevel = $dates['txtIdSkilLevel'];
                $txtName_Exercise = $dates['txtName_Exercise'];
                $txtDescription_Exercise = $dates['txtDescription_Exercise'];
                $txtType = $dates['txtType'];
                $txtBodyParts = $dates['txtBodyParts'];
                $txtEquipmentName = $dates['txtEquipmentName'];
                $txtEquipmentDescripcion = $dates['txtEquipmentDescripcion'];
                $this->ExerciseModel->insertExercise($txtIdSkilLevel,$txtName_Exercise,$txtDescription_Exercise,$txtType,$txtBodyParts,$txtEquipmentName,$txtEquipmentDescripcion);
                redirect('ExerciseController/index');
            }
        }
        
        public function delete($id = NULL){
            if($id != NULL){
                $this->ExerciseModel->deleteExercise($id);
                redirect('ExerciseController/index');
            }
        }
        
        public function edit($id = NULL){
            if ($id != NULL) {
                $data['content']='exercise/edit';
                $data['var_selSkill_level']=$this->ExerciseModel->selSkill_level();
                $data['datesExercise']= $this->ExerciseModel->editExercise($id);
                $this->load->view('template', $data);
            } else {
                redirect('ExerciseController/index');
            }
        }
        public function update(){
             $dates = $this->input->post();
            
            if (isset($dates)) {
                $txtIdExercise = $dates['txtIdExercise'];
                $txtIdSkilLevel = $dates['txtIdSkilLevel'];
                $txtName_Exercise = $dates['txtName_Exercise'];
                $txtDescription_Exercise = $dates['txtDescription_Exercise'];
                $txtType = $dates['txtType'];
                $txtBodyParts = $dates['txtBodyParts'];
                $txtEquipmentName = $dates['txtEquipmentName'];
                $txtEquipmentDescripcion = $dates['txtEquipmentDescripcion'];
                $this->ExerciseModel->updateExercise($txtIdExercise,$txtIdSkilLevel,$txtName_Exercise,$txtDescription_Exercise,$txtType,$txtBodyParts,$txtEquipmentName,$txtEquipmentDescripcion);
                redirect('ExerciseController/index');
            }
        }
}
