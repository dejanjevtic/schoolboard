<?php
 
 class CSM extends Student{
	 
	protected $result; 
	 
 	public function __construct ($name, $grade) {
		parent::__construct($name, $grade);		
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
		if($average>=7) {$result = 1;}
		else {$result = 0;}
			
		return $result;
	}
 }


 
?>