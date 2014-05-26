<?php
	
	class Razryad extends ORM {
		
		public $e_id_razryad;
		public $razryad;
		public $zvanie;
		public $date_zvanie;
		public $sud_kval;
		public $date_sud_kval;
		public $tren_kat;
		public $date_tren_kat;
				
		public function Razryad($e_id_razryad, $razryad, $zvanie, $date_zvanie, $sud_kval, $date_sud_kval, $tren_kat, $date_tren_kat){
			$this->e_id_razryad = $e_id_razryad;
			$this->razryad = $razryad;
			$this->zvanie = $zvanie;
			$this->date_zvanie = $date_zvanie;
			$this->sud_kval = $sud_kval;
			$this->date_sud_kval = $date_sud_kval;
			$this->tren_kat = $tren_kat;
			$this->date_tren_kat = $date_tren_kat;
		}
		
	}
	
?>