<?php
 
 class Student {
	 
 	private $name;	
	protected $grade;
	
	
	function __construct($name, $grade) {
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
 }


 
?>