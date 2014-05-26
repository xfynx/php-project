<?php
	
	class People extends ORM {
		
		public $e_id;
		public $surname;
		public $fname;
		public $otch;
		public $birth;
		public $raion;
		public $town;
		public $street;
		public $home_index;
		public $phone;
		public $email;
		public $educ;
		public $work;
		public $password;
				
		public function People($e_id = 0, $surname, $fname, $otch, $birth, $raion, $town, $street, $home_index, $phone, $email, $educ, $work, $password){
			$this->surname = $surname;
			$this->fname = $fname;
			$this->otch = $otch;
			$this->birth = $birth;
			$this->raion = $raion;
			$this->town = $town;
			$this->street = $street;
			$this->home_index = $home_index;
			$this->phone = $phone;
			$this->email = $email;
			$this->educ = $educ;
			$this->work = $work;
			$this->password = $password;
			
			if ($e_id) $this->e_id = $e_id;
		}
		
	}
	
?>