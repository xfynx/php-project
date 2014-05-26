<div class="span12">
<br>
<?php
$id = $currentUser->e_id;
$razryad = RazryadTable::getInstance()->findRazryad($id);
$sorevnovaniya = SorevnovaniyaTable::getInstance()->findSorevnovaniya($id);
?>
<div class="row-fluid">
<div class="span6 offset3">
	<p class="lead">Данные о сотруднике</p>
</div>
</div>
<form method="GET">
<div class="row-fluid">
<div class="span3 offset3">
<input hidden name="peopleId" value="<?php echo $currentUser->e_id ?>"/>
<div class="title" for="peopleSurname">Фамилия</div>
<input class="form-field" type="text" name="peopleSurname" value="<?php echo $currentUser->surname ?>"/>
<div class="title" for="peopleFname">Имя</div>
<input class="form-field" type="text" name="peopleFname" value="<?php echo $currentUser->fname ?>"/>
<div class="title" for="peopleOtch">Отчество</div>
<input class="form-field" type="text" name="peopleOtch" value="<?php echo $currentUser->otch ?>"/>
<div class="title" for="peopleBirth">Дата рождения</div>
<input class="form-field" type="text" name="peopleBirth" value="<?php echo $currentUser->birth ?>"/>
<div class="title" for="peopleRaion">Район</div>
<input class="form-field" type="text" name="peopleRaion" value="<?php echo $currentUser->raion ?>"/>
<div class="title" for="peopleTown">Город</div>
<input class="form-field" type="text" name="peopleTown" value="<?php echo $currentUser->town ?>"/>
</div>
<div class="span3">
<div class="title" for="peopleStreet">Улица</div>
<input class="form-field" type="text" name="peopleStreet" value="<?php echo $currentUser->street ?>"/>
<div class="title" for="peopleHome_index">Домашний индекс</div>
<input class="form-field" type="text" name="peopleHome_index" value="<?php echo $currentUser->home_index ?>"/>
<div class="title" for="peoplePhone">Телефон</div>
<input class="form-field" type="text" name="peoplePhone" value="<?php echo $currentUser->phone ?>"/>
<div class="title" for="peopleEmail">Адрес эл.почты</div>
<input class="form-field" type="text" name="peopleEmail" value="<?php echo $currentUser->email ?>"/>
<div class="title" for="peopleEduc">Образование</div>
<input class="form-field" type="text" name="peopleEduc" value="<?php echo $currentUser->educ ?>"/>
<div class="title" for="peopleWork">Работа</div>
<input class="form-field" type="text" name="peopleWork" value="<?php echo $currentUser->work ?>"/>
<input hidden name="peoplePassword" value="<?php echo $currentUser->password ?>"/><br />
<input name="editPeople" class="btn btn-primary" type="submit" value="EDIT"/>
<br />
</div>
</form>
<br />
<div class="row-fluid">
<div class="span6 offset3">
	<p class="lead">Данные судейско-тренерских категорий</p>
</div>
</div>
<form method="GET">
<fieldset>
<div class="row-fluid">
<div class="span3 offset3">
<input hidden name="razryadId" value="<?php echo $razryad->e_id_razryad ?>"/>
<div class="title" for="razryadRazryad">Разряд</div>
<input class="form-field" type="text" name="razryadRazryad" value="<?php echo $razryad->razryad ?>"/>
<div class="title" for="razryadZvanie">Звание</div>
<input class="form-field" type="text" name="razryadZvanie" value="<?php echo $razryad->zvanie ?>"/>
<div class="title" for="razryadDate_zvanie">Дата присвоения разряда</div>
<input class="form-field" type="text" name="razryadDate_zvanie" value="<?php echo $razryad->date_zvanie ?>"/>
<div class="title" for="razryadSud_kval">Судейская квалификация</div>
<input class="form-field" type="text" name="razryadSud_kval" value="<?php echo $razryad->sud_kval ?>"/>
</div>
<div class="span3">
<div class="title" for="razryadDate_sud_kval">Дата присвоения судейской квалификации</div>
<input class="form-field" type="text" name="razryadDate_sud_kval" value="<?php echo $razryad->date_sud_kval ?>"/>
<div class="title" for="razryadTren_kat">Тренерская категория</div>
<input class="form-field" type="text" name="razryadTren_kat" value="<?php echo $razryad->tren_kat ?>"/>
<div class="title" for="razryadDate_tren_kat">Дата присвоения тренерской категории</div>
<input class="form-field" type="text" name="razryadDate_tren_kat" value="<?php echo $razryad->date_tren_kat ?>"/><br />
<input name="editRazryad" class="btn btn-primary" type="submit" value="EDIT"/>
</div>
</fieldset>
</form>

<br />

<div class="row-fluid">
<div class="span3 offset5">
	<p class="lead">Мероприятия</p>
</div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="text-align:center">Дата</th>
            <th style="text-align:center">Название</th>
            <th style="text-align:center">Место</th>
            <th style="text-align:center">Суд.должность</th>
            <th style="text-align:center">Править</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sorevnovaniya as $nsorevnovaniya) : ?>
            <tr>
        <form method="GET">
                <input name="sorevnovaniyaId"
                       value="<?php echo $nsorevnovaniya->e_id_sorevnovaniya ?>"	
                       hidden/>
			<td>
                <input type="text" name="sorevnovaniyaDate_sor" class="input"
                       value="<?php echo $nsorevnovaniya->date_sor ?>"
                       />
            </td>
            <td>
                <input type="text" name="sorevnovaniyaName_sor" class="input"
                       value="<?php echo $nsorevnovaniya->name_sor ?>"
                       />
            </td>
            <td>
                <input type="text" name="sorevnovaniyaMesto" class="input"
                       value="<?php echo $nsorevnovaniya->mesto ?>"
                       />
            </td>
            <td>
                <input type="text" name="sorevnovaniyaSud_dolgn" class="input"
                       value="<?php echo $nsorevnovaniya->sud_dolgn ?>"
                       />					
            </td>
					<input hidden name="sorevnovaniyaEvent_id"
						value="<?php echo $nsorevnovaniya->event_id?>"
					/>							
					
            <td><input name="deleteSorevnovaniya" type="submit" class="btn btn-danger" value="X"/></td>	
            <td><input name="editSorevnovaniya" type="submit" class="btn btn-primary" value="EDIT"/></td>	
        </form>
    </tr>		
<?php endforeach; ?>
</tbody>	
</table>
</div>