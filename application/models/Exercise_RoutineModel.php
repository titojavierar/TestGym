<?php

class Exercise_RoutineModel extends CI_Model{
    function __construct(){
            parent::__construct();
            $this->load->database();
    }
    
    public function listExercise_Routine ($Id_Routine){
        $query = $this->db->query("SELECT * FROM tbl_exercise_has_tbl_routine er WHERE er.tbl_Routine_Id_Routine = $Id_Routine");
        return $query->result();
    }
    
    public function insertExercise_Routine ($tbl_Exercise_Id_Exercise,$tbl_Routine_Id_Routine, $Amount_Sets,$Reps){
        $arrayDates = array(
            'tbl_Exercise_Id_Exercise' => $tbl_Exercise_Id_Exercise,
            'tbl_Routine_Id_Routine' => $tbl_Routine_Id_Routine,
            'Amount_Sets' => $Amount_Sets,
            'Reps' => $Reps
        );
        
        $this->db->insert('tbl_exercise_has_tbl_routine',$arrayDates);
    }
}
