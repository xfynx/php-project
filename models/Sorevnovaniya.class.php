<?php
	
	class Sorevnovaniya extends ORM {
		
		public $e_id_sorevnovaniya;
		public $date_sor;
		public $name_sor;
		public $mesto;
		public $sud_dolgn;
		public $event_id;
		
		public function Sorevnovaniya($e_id_sorevnovaniya, $date_sor, $name_sor, $mesto, $sud_dolgn, $event_id){
			$this->e_id_sorevnovaniya = $e_id_sorevnovaniya;
			$this->date_sor = $date_sor;
			$this->name_sor = $name_sor;
			$this->mesto = $mesto;
			$this->sud_dolgn = $sud_dolgn;
			//$this->event_id = $event_id;
			if ($event_id) $this->event_id = $event_id;
		}
		
	}
	
?>