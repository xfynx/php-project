<?php	

	//people
	$e_id = isset($_REQUEST['peopleId']) ? $_REQUEST['peopleId'] : 0;
	$surname = isset($_REQUEST['peopleSurname']) ? $_REQUEST['peopleSurname'] : '';
	$fname = isset($_REQUEST['peopleFname']) ? $_REQUEST['peopleFname'] : '';
	$otch = isset($_REQUEST['peopleOtch']) ? $_REQUEST['peopleOtch'] : '';
	$birth = isset($_REQUEST['peopleBirth']) ? $_REQUEST['peopleBirth'] : '';
	$raion = isset($_REQUEST['peopleRaion']) ? $_REQUEST['peopleRaion'] : '';
	$town = isset($_REQUEST['peopleTown']) ? $_REQUEST['peopleTown'] : '';
	$street = isset($_REQUEST['peopleStreet']) ? $_REQUEST['peopleStreet'] : '';
	$home_index = isset($_REQUEST['peopleHome_index']) ? $_REQUEST['peopleHome_index'] : 0;
	$phone = isset($_REQUEST['peoplePhone']) ? $_REQUEST['peoplePhone'] : 0;
	$email = isset($_REQUEST['peopleEmail']) ? $_REQUEST['peopleEmail'] : '';
	$educ = isset($_REQUEST['peopleEduc']) ? $_REQUEST['peopleEduc'] : '';
	$work = isset($_REQUEST['peopleWork']) ? $_REQUEST['peopleWork'] : '';
	$password = isset($_REQUEST['peoplePassword']) ? $_REQUEST['peoplePassword'] : '';
	
	//addPeople
	if (isset($_REQUEST['addPeople']) && $surname && $fname && $otch && $birth && $password/* && $raion && $town && $street && $home_index && $phone && $email && $educ && $work*/){
		$people = new People($e_id, $surname, $fname, $otch, $birth, '-', '-', '-', 0, 0, '-', '-', '-', $password);
		/*$raion, $town, $street, $home_index, $phone, $email, $educ, $work*/
		PeopleTable::getInstance()->addPeople($people); 
	}	
	
	//editPeople
	if (isset($_REQUEST['editPeople']) || $surname || $fname || $otch || $birth || $raion || $town || $street || $home_index || $phone || $email || $educ || $work){
		$people = new People($e_id, $surname, $fname, $otch, $birth, $raion, $town, $street, $home_index, $phone, $email, $educ, $work, $password);
		PeopleTable::getInstance()->editPeople($people); 
	}	
	
	//deletePeople
	if (isset($_REQUEST['deletePeople']) && $e_id){
		PeopleTable::getInstance()->deletePeople($e_id);				
	}

	$aPeople = PeopleTable::getInstance()->getAllPeople();
	
	//razryad
	$e_id_razryad = isset($_REQUEST['razryadId']) ? $_REQUEST['razryadId'] : 0; 
	$razryad = isset($_REQUEST['razryadRazryad']) ? $_REQUEST['razryadRazryad'] : ''; 
	$zvanie = isset($_REQUEST['razryadZvanie']) ? $_REQUEST['razryadZvanie'] : ''; 
	$date_zvanie = isset($_REQUEST['razryadDate_zvanie']) ? $_REQUEST['razryadDate_zvanie'] : '';
	$sud_kval = isset($_REQUEST['razryadSud_kval']) ? $_REQUEST['razryadSud_kval'] : '';
	$date_sud_kval = isset($_REQUEST['razryadDate_sud_kval']) ? $_REQUEST['razryadDate_sud_kval'] : '';
	$tren_kat = isset($_REQUEST['razryadTren_kat']) ? $_REQUEST['razryadTren_kat'] : '';
	$date_tren_kat = isset($_REQUEST['razryadDate_tren_kat']) ? $_REQUEST['razryadDate_tren_kat'] : '';
	
	//addRazryad
	if (isset($_REQUEST['addRazryad']) && ($e_id_razryad || $razryad || $zvanie || $date_zvanie || $sud_kval || $date_sud_kval || $tren_kat ||$date_tren_kat)){
		$nrazryad = new Razryad($e_id_razryad, $razryad, $zvanie, $date_zvanie, $sud_kval, $date_sud_kval, $tren_kat, $date_tren_kat);
		RazryadTable::getInstance()->addRazryad($nrazryad); 
	}	
	
	//editRazryad
	if (isset($_REQUEST['editRazryad']) && ($e_id_razryad || $razryad || $zvanie || $date_zvanie || $sud_kval || $date_sud_kval || $tren_kat || $date_tren_kat)){
		$nrazryad = new Razryad($e_id_razryad, $razryad, $zvanie, $date_zvanie, $sud_kval, $date_sud_kval, $tren_kat, $date_tren_kat);
		RazryadTable::getInstance()->editRazryad($nrazryad); 
	}	
	
	//deleteRazryad
	if (isset($_REQUEST['deleteRazryad']) && $e_id_razryad){
		RazryadTable::getInstance()->deleteRazryad($e_id_razryad);				
	}

	$aRazryad = RazryadTable::getInstance()->getAllRazryad();
	
	//sorevnovaniya
	$e_id_sorevnovaniya = isset($_REQUEST['sorevnovaniyaId']) ? $_REQUEST['sorevnovaniyaId'] : 0;
	$date_sor = isset($_REQUEST['sorevnovaniyaDate_sor']) ? $_REQUEST['sorevnovaniyaDate_sor'] : '';
	$name_sor = isset($_REQUEST['sorevnovaniyaName_sor']) ? $_REQUEST['sorevnovaniyaName_sor'] : ''; 
	$mesto = isset($_REQUEST['sorevnovaniyaMesto']) ? $_REQUEST['sorevnovaniyaMesto'] : '';
	$sud_dolgn = isset($_REQUEST['sorevnovaniyaSud_dolgn']) ? $_REQUEST['sorevnovaniyaSud_dolgn'] : '';
	$event_id = isset($_REQUEST['sorevnovaniyaEvent_id']) ? $_REQUEST['sorevnovaniyaEvent_id'] : 0;
	
	//addSorevnovaniya
	if (isset($_REQUEST['addSorevnovaniya']) && $e_id_sorevnovaniya && $date_sor && $name_sor && $mesto && $sud_dolgn){
		$sorevnovaniya = new Sorevnovaniya($e_id_sorevnovaniya, $date_sor, $name_sor, $mesto, $sud_dolgn, $event_id);
		SorevnovaniyaTable::getInstance()->addSorevnovaniya($sorevnovaniya); 
	}	
	
	//editSorevnovaniya
	if (isset($_REQUEST['editSorevnovaniya']) && ($event_id || $e_id_sorevnovaniya || $date_sor || $name_sor || $mesto || $sud_dolgn)){
		$sorevnovaniya = new Sorevnovaniya($e_id_sorevnovaniya, $date_sor, $name_sor, $mesto, $sud_dolgn, $event_id);
		SorevnovaniyaTable::getInstance()->editSorevnovaniya($sorevnovaniya); 
	}
	
	//deleteSorevnovaniya
	if (isset($_REQUEST['deleteSorevnovaniya']) && $event_id){
		SorevnovaniyaTable::getInstance()->deleteSorevnovaniya($event_id);				
	}

	$aSorevnovaniya = SorevnovaniyaTable::getInstance()->getAllSorevnovaniya();

        
        //login
        $idLogin = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $passwordLogin = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
                
        if(isset($_REQUEST['login']) && $idLogin && $passwordLogin){
            PeopleTable::getInstance()->findPeople($idLogin,$passwordLogin);
        };
?>