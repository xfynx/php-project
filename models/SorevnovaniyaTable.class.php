<?php
	
	class SorevnovaniyaTable extends ORM {
		
		const NAME = 'sorevnovaniya';
				
		static private $instance = NULL; 

		static public function getInstance() { 
			if (self::$instance == NULL) { 
				self::$instance = new SorevnovaniyaTable(); 
			} 
			return self::$instance; 
		} 
		
		public function getAllSorevnovaniya(){
		
			$query = 'SELECT * from '.self::NAME;
			
			$res = $this->executeQuery($query);
			
			$aSorevnovaniya = array();
			
			while ($row = mysql_fetch_assoc($res)){
				
				$aSorevnovaniya[] = new Sorevnovaniya($row['e_id'], $row['date_sor'], $row['name_sor'], $row['mesto'], $row['sud_dolgn'], $row['event_id']);
			}
                        
			return $aSorevnovaniya;
		}
		
		public function addSorevnovaniya(Sorevnovaniya $sorevnovaniya){
			$query = "INSERT INTO ".self::NAME."(e_id, date_sor, name_sor, mesto, sud_dolgn) VALUES (".
				$sorevnovaniya->e_id_sorevnovaniya .", '".
				$sorevnovaniya->date_sor ."', '".
				$sorevnovaniya->name_sor ."', '".
				$sorevnovaniya->mesto ."', '".
				$sorevnovaniya->sud_dolgn ."')";

			$this->executeQuery($query);	
		}
		
		public function deleteSorevnovaniya($event_id){
			$query = "DELETE FROM ".self::NAME." WHERE event_id=".$event_id;
			$this->executeQuery($query);	
		}
		
		public function editSorevnovaniya(Sorevnovaniya $sorevnovaniya){
			$query = "UPDATE ".self::NAME." SET 				
				e_id = {$sorevnovaniya->e_id_sorevnovaniya},
				date_sor = '{$sorevnovaniya->date_sor}',
				name_sor = '{$sorevnovaniya->name_sor}',
				mesto = '{$sorevnovaniya->mesto}',
				sud_dolgn = '{$sorevnovaniya->sud_dolgn}',
				event_id = '{$sorevnovaniya->event_id}'
				WHERE event_id={$sorevnovaniya->event_id}";
			$this->executeQuery($query);	
		}
		
		public function findSorevnovaniya($e_id){
			
			$query = "SELECT * FROM ".self::NAME.
					" WHERE e_id=".$e_id;
			$result = $this->executeQuery($query);	
			$aSorevnovaniya = array();
			
			while ($row = mysql_fetch_assoc($result)){				
				$aSorevnovaniya[] = new Sorevnovaniya($row['e_id'], $row['date_sor'], $row['name_sor'], $row['mesto'], $row['sud_dolgn'], $row['event_id']);
			}
			return $aSorevnovaniya;
		}
		
	}
	
?>