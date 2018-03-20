<?php

class SkillLevelModel extends CI_Model{
    function __construct(){
            parent::__construct();
            $this->load->database();
    }
    
    public function listSkillLevel (){
        $query = $this->db->query("SELECT * FROM tbl_skill_level");
        return $query->result();
    }
    
    public function insertSkillLevel ($Id_Skill_Level, $Name_Skill_Level){
        $arrayDates = array(
            'Id_Skill_Level' => $Id_Skill_Level,
            'Name_Skill_Level ' => $Name_Skill_Level
        );
        
        $this->db->insert('tbl_skill_level',$arrayDates);
    }
}

