<?php 
	class User {
		private $id;
		private $type;
		private $capacity;
		private $number;
		
		function __construct($id = NULL, $type = NULL, $capacity = NULL, $number = NULL) {
			$this->id = $id;
			$this->type = $type;
			$this->capacity = $capacity;
			$this->number = $number;
		}
		
		public function getID() {
			return $this->id;
		}
		
		public function getType() {
			return $this->type;
		}
		
		public function getCapacity() {
			return $this->capacity;	
		}
		public function getNumber() {
			return $this->number;	
		}
	}
?>