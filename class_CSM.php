<?php
 
 class CSM extends Student{
	 
	protected $result; 
	protected $myObj;
	
 	public function __construct ($name, $grade) {
		parent::__construct($name, $grade);	
			$this->name = $name;
			$this->grade = $grade;
	}
	
	function averageGrade(){
		$ex=explode(",", $this->grade);
		$sum=0;$i=0;
		foreach($ex as $part){
			$sum+=$part;$i++;
		}
		$sum=$sum/$i;
		return $sum;
		
	}	
	
	function result($average){
		if($average >= 7) {$result = true;}
		else {$result = false;}
		$myObj=new stdClass();
		$myObj->name = $this->name;
		$myObj->grade = $this->grade;		
		$myObj->average = $average;
		$myObj->pass = $result;

		$res = json_encode($myObj);

		return $res;
	}
 }


 
?>