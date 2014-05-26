<?php
	
	class RazryadTable extends ORM {
		
		const NAME = 'razryad';
				
		static private $instance = NULL; 

		static public function getInstance() { 
			if (self::$instance == NULL) { 
				self::$instance = new RazryadTable(); 
			} 
			return self::$instance; 
		} 
		
		public function getAllRazryad(){
		
			$query = 'SELECT * from '.self::NAME;
			
			$res = $this->executeQuery($query);
			
			$aRazryad = array();
			
			while ($row = mysql_fetch_assoc($res)){
				
				$aRazryad[] = new Razryad($row['e_id'], $row['razryad'], $row['zvanie'], $row['date_zvanie'], $row['sud_kval'], $row['date_sud_kval'], $row['tren_kat'], $row['date_tren_kat']);
			}
			
			return $aRazryad;
		}
		
		public function addRazryad(Razryad $nrazryad){
			$query = "INSERT INTO ".self::NAME."(e_id, razryad, zvanie, date_zvanie, sud_kval, date_sud_kval, tren_kat, date_tren_kat) VALUES (".
				$nrazryad->e_id_razryad .", '".
				$nrazryad->razryad ."', '".
				$nrazryad->zvanie ."', '".
				$nrazryad->date_zvanie ."', '".
				$nrazryad->sud_kval ."', '".
				$nrazryad->date_sud_kval ."', '".
				$nrazryad->tren_kat ."', '".
				$nrazryad->date_tren_kat ."')";
			$this->executeQuery($query);	
		}
		
		public function deleteRazryad($razryadId){
			$query = "DELETE FROM ".self::NAME." WHERE e_id=".$razryadId;
			$this->executeQuery($query);	
		}
		
		public function editRazryad(Razryad $razryad){
			$query = "UPDATE ".self::NAME." SET 				
				e_id = {$razryad->e_id_razryad},
				razryad = '{$razryad->razryad}',
				zvanie = '{$razryad->zvanie}',
				date_zvanie = '{$razryad->date_zvanie}',
				sud_kval = '{$razryad->sud_kval}',
				date_sud_kval = '{$razryad->date_sud_kval}',
				tren_kat = '{$razryad->tren_kat}',
				date_tren_kat = '{$razryad->date_tren_kat}'
				WHERE e_id={$razryad->e_id_razryad}";
			$this->executeQuery($query);	
		}
		
		public function findRazryad($id){

			$query = "SELECT * FROM ".self::NAME.
					" WHERE e_id=".$id." limit 1;";
                        
			$result = $this->executeQuery($query);	
                        
			if ($row = mysql_fetch_assoc($result)){

				return new Razryad($row['e_id'], $row['razryad'], $row['zvanie'], $row['date_zvanie'], $row['sud_kval'], $row['date_sud_kval'], $row['tren_kat'], $row['date_tren_kat']);
			}
			
			return false;
		}
        }
		
	
?>