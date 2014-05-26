<?php
	
	class PeopleTable extends ORM {
		
		const NAME = 'people';
				
		static private $instance = NULL; 

		static public function getInstance() { 
			if (self::$instance == NULL) { 
				self::$instance = new PeopleTable(); 
			} 
			return self::$instance; 
		} 
		
		public function getAllPeople(){
		
			$query = 'SELECT * from '.self::NAME;
			
			$res = $this->executeQuery($query);
			
			$aPeople = array();
			
			while ($row = mysql_fetch_assoc($res)){
				
				$aPeople[] = new People($row['e_id'], $row['surname'], $row['fname'], $row['otch'], $row['birth'], $row['raion'], $row['town'], $row['street'], $row['home_index'], $row['phone'], $row['email'], $row['educ'], $row['work'], $row['password']);	
			}
			
			return $aPeople;
		}
		
		public function addPeople(People $people){
			$query = "INSERT INTO ".self::NAME."(surname, fname, otch, birth, raion, town, street, home_index, phone, email, educ, work, password) VALUES ('".
				$people->surname ."', '".
				$people->fname ."', '".
				$people->otch ."', '".
				$people->birth ."', '".
				$people->raion ."', '".
				$people->town ."', '".
				$people->street ."', ".
				$people->home_index .", ".
				$people->phone .", '".
				$people->email ."', '".
				$people->educ ."', '".
				$people->work ."', '".
				md5($people->password) ."')";
			echo $query;
			$this->executeQuery($query);	
		}
		
		public function deletePeople($peopleId){
			$query = "DELETE FROM sorevnovaniya WHERE e_id=".$peopleId;
			$this->executeQuery($query);
			$query = "DELETE FROM razryad WHERE e_id=".$peopleId;
			$this->executeQuery($query);
			$query = "DELETE FROM ".self::NAME." WHERE e_id=".$peopleId;
			$this->executeQuery($query);	
		}
		
		public function editPeople(People $people){
			$query = "UPDATE ".self::NAME." SET 				
				surname = '{$people->surname}',
				fname = '{$people->fname}',
				otch = '{$people->otch}',
				birth = '{$people->birth}',
				raion = '{$people->raion}',
				town = '{$people->town}',
				street = '{$people->street}',
				home_index = {$people->home_index},
				phone = {$people->phone},
				email = '{$people->email}',
				educ = '{$people->educ}',
				work = '{$people->work}',
				password = '{$people->password}'
				WHERE e_id={$people->e_id}";

			$this->executeQuery($query);	
		}
		
		public function findPeople($login, $password){
			$query = "SELECT * FROM ".self::NAME.
					" WHERE email='".$login."' AND ".
					"password = '".md5($password)."'";
                        
			$result = $this->executeQuery($query);	
                        
			if ($row = mysql_fetch_assoc($result)){
				return $row['e_id'];
			}
			
			return false;
		}
		
		public function findPeopleById($id){
			
			$query = "SELECT * FROM ".self::NAME.
					" WHERE e_id='".$id."'";
			$result = $this->executeQuery($query);	
                        
			if ($row = mysql_fetch_assoc($result)){
				return new People($row['e_id'], $row['surname'], $row['fname'], $row['otch'], $row['birth'], $row['raion'], $row['town'], $row['street'], $row['home_index'], $row['phone'], $row['email'], $row['educ'], $row['work'], $row['password']);			   
                        }
			
			return false;
		}
		
	}
	
?>