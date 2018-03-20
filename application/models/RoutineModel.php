<?php

class RoutineModel extends CI_Model{
    function __construct(){
            parent::__construct();
            $this->load->database();
    }
    
    public function listRoutine (){
        $query = $this->db->query("SELECT * FROM tbl_routine");
        return $query->result();
    }
    
    public function insertRoutine ($Name_Routine, $Amount_Exercise){
        $arrayDates = array(
            'Name_Routine' => $Name_Routine,
            'Amount_Exercise' => $Amount_Exercise
        );
        
        $this->db->insert('tbl_routine',$arrayDates);
    }
    
    public function selExercise(){
        $query = $this->db->query("Select * from tbl_exercise order by Name_Exercise");
        return $query->result();
    }
    
    public function listExercisexRoutine($idRoutine){
        $query = $this->db->query("SELECT * FROM tbl_exercise_has_tbl_routine cw INNER JOIN tbl_exercise e ON cw.tbl_Exercise_Id_Exercise=e.Id_Exercise INNER JOIN tbl_routine r ON cw.tbl_Routine_Id_Routine=r.Id_Routine WHERE cw.tbl_Routine_Id_Routine = $idRoutine");
        return $query->result();
    }
    
    public function insertExercisexRoutine($tbl_Exercise_Id_Exercise,$tbl_Routine_Id_Routine,$Amount_Sets,$Reps){
        $sql = $this->db->query("SELECT * FROM tbl_exercise_has_tbl_routine cw WHERE cw.tbl_Exercise_Id_Exercise = $tbl_Exercise_Id_Exercise and cw.tbl_Routine_Id_Routine = $tbl_Routine_Id_Routine");
        
        if ($sql->num_rows() > 0) {
            return false;
        } else {
            $arrayDates = array(
                'tbl_Exercise_Id_Exercise' => $tbl_Exercise_Id_Exercise,
                'tbl_Routine_Id_Routine' => $tbl_Routine_Id_Routine,
                'Amount_Sets' => $Amount_Sets,
                'Reps' => $Reps
            );            
            $this->db->insert('tbl_exercise_has_tbl_routine',$arrayDates);
            return true;
        }
    }
}

