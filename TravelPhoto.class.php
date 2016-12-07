<?php 
	class TravelPhoto {
		
		public static $photoID = 0;
		private $date;
		private $fileName;
		private $description;
		private $title;
		private $latitude;
		private $longitude;
		private $ID;
		
		function __construct($fileName, $title, $description, $latitude, $longitude){
			$this->fileName = $fileName;
			$this->title = $title;
			$this->description = $description;
			$this->latitude = $latitude;
			$this->longitude = $longitude;
			self::$photoID++;
		}
		
		public function __toString(){
			return "<div class= 'col-md-3'><img src = '" . $this -> fileName . "' alt = '" . $this -> title ."'></div>";
		}
	}
?>