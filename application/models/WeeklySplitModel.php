<?php

class WeeklySplitModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function listWeeklySplit (){
        $query = $this->db->query("SELECT ws.Id_Split, ws.Name_Split, ws.Day1_Id_Routine as idNR1, r1.Name_Routine as NR1,  
		ws.Day2_Id_Routine as idNR2, r2.Name_Routine as NR2,
		ws.Day3_Id_Routine as idNR3, r3.Name_Routine as NR3,
        ws.Day4_Id_Routine as idNR4, r4.Name_Routine as NR4,
        ws.Day5_Id_Routine as idNR5, r5.Name_Routine as NR5,
        ws.Day6_Id_Routine as idNR6, r6.Name_Routine as NR6,
        ws.Day7_Id_Routine as idNR7, r7.Name_Routine as NR7        
	FROM tbl_weeklysplit ws inner join tbl_routine r1 on ws.Day1_Id_Routine=r1.Id_Routine
							inner join tbl_routine r2 on ws.Day2_Id_Routine=r2.Id_Routine
                            inner join tbl_routine r3 on ws.Day3_Id_Routine=r3.Id_Routine
                            inner join tbl_routine r4 on ws.Day4_Id_Routine=r4.Id_Routine
                            inner join tbl_routine r5 on ws.Day5_Id_Routine=r5.Id_Routine
                            inner join tbl_routine r6 on ws.Day6_Id_Routine=r6.Id_Routine
                            inner join tbl_routine r7 on ws.Day7_Id_Routine=r7.Id_Routine");
        return $query->result();
    }
    
    public function insertWeeklySplit ($Name_Routine, $Day1_Id_Routine,$Day2_Id_Routine,$Day3_Id_Routine,$Day4_Id_Routine,$Day5_Id_Routine,$Day6_Id_Routine,$Day7_Id_Routine){
        $arrayDates = array(
            'Name_Split' => $Name_Routine,
            'Day1_Id_Routine' => $Day1_Id_Routine,
            'Day2_Id_Routine' => $Day2_Id_Routine,
            'Day3_Id_Routine' => $Day3_Id_Routine,
            'Day4_Id_Routine' => $Day4_Id_Routine,
            'Day5_Id_Routine' => $Day5_Id_Routine,
            'Day6_Id_Routine' => $Day6_Id_Routine,
            'Day7_Id_Routine' => $Day7_Id_Routine
        );
        
        $this->db->insert('tbl_weeklysplit',$arrayDates);
    }
}

