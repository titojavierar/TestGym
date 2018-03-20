<?php

class SkillLevelController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('SkillLevelModel');
	}
	
	public function index(){
		$data['content']="skillLevel/index";
                $data['var_listSkillLevels'] = $this->SkillLevelModel->listSkillLevel();
		$this->load->view("template", $data);
	}
        
        public function insert(){
            $dates = $this->input->post();
            
            if (isset($dates)) { 
                $txtName_Skill_Level = $dates['txtName_Skill_Level'];                
                $this->SkillLevelModel->insertSkillLevel($txtName_Skill_Level);
                redirect('SkillLevelController/index'); 
            }
        }
        
//         public function edit($id = NULL){
//            if ($id != NULL) {
//                $data['content']='skillLevel/edit';
//                $data['datesSkillLevel']= $this->SkillLevelModel->editSkillLevel($id);
//                $this->load->view('template', $data);
//            } else {
//                redirect('SkillLevelController/index');
//            }
//         }
        
//        public function update(){
//            $dates = $this->input->post();
//            
//            if (isset($dates)) {
//                $txtId_Skill_Level = $dates['txtId_Skill_Level'];
//                $txtName_Skill_Level = $dates['txtName_Skill_Level'];                
//                $this->SkillLevelModel->updateSkillLevel($txtId_Skill_Level,$txtName_Skill_Level);
//                redirect('SkillLevelController/index');
//            }
//        }
}

