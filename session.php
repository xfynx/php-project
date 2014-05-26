<?php 
	session_start();
	$currentUser = null;
        $userId = null;
        
	if (!isset($_SESSION['USERID'])) {
                
		if (isset($_COOKIE['USERID'])){
			$userId = $_COOKIE['USERID'];
			$currentUser = PeopleTable::getInstance()->findPeopleById($userId);
			$_SESSION['USERID'] = $userId;	
                        
		}		
		else if (isset($_REQUEST['email']) && isset($_REQUEST['password'])){
			
			$userId = PeopleTable::getInstance()->findPeople($_REQUEST['email'], $_REQUEST['password']);
			$currentUser = PeopleTable::getInstance()->findPeopleById($userId);
                      
			if ($userId) {
				$_SESSION['USERID'] = $userId;
				if (isset($_REQUEST['remember_me'])){
					//ставим куку на 30 дней
					setcookie('USERID', $userId, time()+3600*24*30);
				}
			}
                        
		}		
		
	} else {
		$currentUser = PeopleTable::getInstance()->findPeopleById($_SESSION['USERID']);
                
		// если пользователь пытается разлогиниться	
		if (isset($_REQUEST['exit'])) {
			// убиваем сессию
			session_destroy();
			
			// удаляем куку
			setcookie('USERID', $userId);
			
			// перезагружаем страницу
			header('Location: '. $_SERVER[PHP_SELF]); 
		}
	} 
?>

