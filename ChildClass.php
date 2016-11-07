<?php
	// this file will extend PArentClass.php
  // the child class is for holidays

	class ChildClass extends ParentClass {
    private $nameOfHoliday;

    public function __construct($month, $day, $nameOfHoliday) {
      parent::__construct($month, $day);
      $this->$nameOfHoliday = $nameOfHoliday;
    }

    public function getName() {
      return $this->$nameOfHoliday;
    }

    public function setName($nameOfHoliday) {
      $this->$nameOfHoliday = $nameOfHoliday;
    }

    public function __toString() {
      $parent = parent::__toString();
      $child = "Wowee! Today is also " . $this->getName();
      return $parent . $child;
    }
	}
