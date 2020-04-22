<?php
 
 class CSMB extends Student{
	 
	protected $result; 
	protected $myObj;
	
 	public function __construct ($id, $name, $grade) {
		parent::__construct($id, $name, $grade);
			$this->id = $id;		
			$this->name = $name;
			$this->grade = $grade;
	}
	
	function averageGrade(){
		$ex=explode(",", $this->grade);
		sort($ex);
		if(count($ex)>2){
			array_shift($ex);
		}
		$sum=0;$i=0;
		foreach($ex as $part){
			$sum+=$part;$i++;
		}
		$sum=$sum/$i;
		return $sum;		
	}	
	
		
	function result($average){
		$ex=explode(",", $this->grade);
		sort($ex);
		if(count($ex)>2){
			array_shift($ex);
		}
		if(end($ex) >8) {$result = true;}
		else {$result = false;}
		
		$man = new SimpleXMLElement('<student></student>');

		
		
		$man->addChild('id', $this->id);
		$man->addChild('name', $this->name);
		$man->addChild('grade', $this->grade);
		$man->addChild('average', $average);
		$man->addChild('pass', $result);
		
		//Header('Content-type: text/xml');
		//print($xml->asXML());
				
		
		return $man->asXML();
	}
 }


 
?>