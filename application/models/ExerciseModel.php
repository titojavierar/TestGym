<?php

class ExerciseModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function selSkill_level(){
            $query = $this->db->query("Select * from tbl_skill_level");
            return $query->result();
    }
    
    public function insertExercise ($IdSkilLevel, $Name_Exercise, $Description_Exercise, $Type, $BodyParts, $EquipmentName, $EquipmentDescripcion){
        $arrayDates = array(
            'tbl_Skill_Level_Id_Skill_Level' => $IdSkilLevel,
            'Name_Exercise' => $Name_Exercise,
            'Description_Exercise' => $Description_Exercise,
            'Type' => $Type,
            'BodyParts' => $BodyParts,
            'EquipmentName' => $EquipmentName,
            'EquipmentDescripcion' => $EquipmentDescripcion
        );
        
        $this->db->insert('tbl_exercise',$arrayDates);
    }
    
    public function listExercise (){
        $query = $this->db->query("SELECT * FROM tbl_exercise e inner join tbl_skill_level sl on e.tbl_Skill_Level_Id_Skill_Level=sl.Id_Skill_Level");
        return $query->result();
    }
    
    public function deleteExercise($id){
        $this->db->where('Id_Exercise', $id);
        $this->db->delete('tbl_exercise');
    }
    
    public function editExercise($id){
        $query = $this->db->query("SELECT * FROM tbl_exercise e inner join tbl_skill_level sl on e.tbl_Skill_Level_Id_Skill_Level=sl.Id_Skill_Level WHERE e.Id_Exercise = $id");
        return $query->result();
    }
    
    public function updateExercise($txtIdExercise,$txtIdSkilLevel,$txtName_Exercise,$txtDescription_Exercise,$txtType,$txtBodyParts,$txtEquipmentName,$txtEquipmentDescripcion){
        $array = array(
            'tbl_Skill_Level_Id_Skill_Level' => $txtIdSkilLevel,
            'Name_Exercise' => $txtName_Exercise,
            'Description_Exercise' => $txtDescription_Exercise,
            'Type' => $txtType,
            'BodyParts' => $txtBodyParts,
            'EquipmentName' => $txtEquipmentName,
            'EquipmentDescripcion' => $txtEquipmentDescripcion
        );
        $this->db->where('Id_Exercise',$txtIdExercise);
        $this->db->update('tbl_exercise', $array);
    }
}
