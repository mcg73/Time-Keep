<?php
//a class that creates an object containing all user input fields from UI and has functions to return a string of each parameter
class detailCreate{
	public $user;
	public $dateOf;
	public $inTime;
	public $outTime;
	public $notes;
	public $dayTot;
	
	function __construct($user, $dateOf, $inTime, $outTime, $notes, $dayTot)
  {
    $this->user = $user;
    $this->dateOf = $dateOf;
    $this->inTime = $inTime;
    $this->outTime = $outTime;
	$this->notes = $notes;
	$this->dayTot = $dayTot;
  }
  //to keep readability Im choosing to separte these functions, I will revisit these functions at a later date
    public function dateString() {
        return $dateOf;
    }
	public function userString(){
		return $user;
	}
	public function inString(){
		return $inTime;
	}
	public function outString(){
		return $outTime;
	}
	public function noteString(){
		return $notes;
	}
	public function hourString(){
		return $dayTot;
	}
}
?>