<?php
	// This is the file for the parent class
  //parent class will be a day of the year

	class ParentClass {
    private $month;
    private $day;

    public function __construct($month, $day) {
      $this->$month = $month;
      $this->$day = $day;
    }

    public function getMonth() {
      return $this->$month;
    }

    public function getDay() {
      return $this->$day;
    }

    public function setMonth($month) {
      $this->$month = $month;
    }

    public function setDate($day) {
      $this->$day = $day;
    }

    public function __toString() {
      return "Today's date is " . getMonth() . " " . getDay();
    }
	}
