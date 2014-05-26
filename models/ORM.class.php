<?php
	
	abstract class ORM {
		
		const HOST = 'localhost';
		const LOGIN = 'xfynx';
		const PASSWORD = 'bushsuxx';
		const DBNAME = 'touris';		
		
		private function connectDB(){
			$dbh = mysql_connect(self::HOST, self::LOGIN, self::PASSWORD);
		
			if (!$dbh) {
				die ('Не удалось подключиться, ' . mysql_error());
			}
		
			$dbSelected = mysql_select_db(self::DBNAME, $dbh) 
				or die('Не удалось выбрать базу данных');
		
			return $dbh;
		} 	
		
		public function executeQuery($query){
			$dbh = $this->connectDb();
			
			$result = mysql_query($query, $dbh);
			
			mysql_close();
			
			return $result;
		}	
	}
	
?>