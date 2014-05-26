<div class="span12">
	<br>
<div class="row-fluid">
<div class="span6 offset5">
	<p class="lead">Данные о сотрудниках</p>
</div>
</div>	
<table class="table table-condensed"> <!--- таблица people --->
		<th>Id</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Дата рождения</th><th>Район</th><th>Населённый пункт</th><th>Адрес</th><th>Почтовый индекс</th><th>Телефон</th><th>Адрес эл.почты</th><th>Образование</th><th>Должность</th><th>Пароль</th>
	<?php foreach ($aPeople as $people) : ?>
		<tbody>
		<tr>
			<form method="GET">
				
				<td>
					<input class="input-mini" type="text" readonly="readonly" name="peopleId"
						value="<?php echo $people->e_id?>"
						style="width: 50px"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleSurname"
						value="<?php echo $people->surname?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleFname"
						value="<?php echo $people->fname?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleOtch"
						value="<?php echo $people->otch?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleBirth"
						value="<?php echo $people->birth?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleRaion"
						value="<?php echo $people->raion?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleTown"
						value="<?php echo $people->town?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleStreet"
						value="<?php echo $people->street?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleHome_index"
						value="<?php echo $people->home_index?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peoplePhone"
						value="<?php echo $people->phone?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleEmail"
						value="<?php echo $people->email?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleEduc"
						value="<?php echo $people->educ?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="peopleWork"
						value="<?php echo $people->work?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" readonly="readonly" name="peoplePassword"
						value="<?php echo $people->password?>"
					/>
				</td>
					
				
				<td><input name="deletePeople" type="submit" class="btn btn-danger" value="X"/></td>	
				<td><input name="editPeople" type="submit" class="btn btn-primary" value="EDIT"/></td>	
			</form>
		</tr>
	</tbody>		
	<?php endforeach;?>
	</table>
	
	<a href="#addPeople" role="button" class="btn btn-primary" data-toggle="modal">Добавить сотрудника</a>
	
	<div class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true"
         id="addPeople" title="block.confirm.title">
        <form method="GET" style="width: 250px;">
		<fieldset>

            <div class="modal-header">
                <p>Создать новую запись</p>
            </div>

            <div class="modal-body">
			<table>
			<tr>
				<td><label for="peopleSurname">Фамилия</label></td>
				<td><input type="text" id="peopleSurname" name="peopleSurname"/></td>
			</tr>
			<tr>	
				<td><label for="peopleFname">Имя</label></td>
				<td><input type="text" id="peopleFname" name="peopleFname"></td>
			</tr>
			<tr>
				<td><label for="peopleOtch">Отчество</label></td>
				<td><input type="text" id="peopleOtch" name="peopleOtch"/></td>
			</tr>
			<tr>
				<td><label for="peopleBirth">Дата</label></td>
				<td><input type="text" id="peopleBirth" name="peopleBirth"/></td>
			</tr>
			<tr>	
				<td><label for="peoplePassword">Пароль</label></td>
				<td><input type="password" name="peoplePassword"></td>
			</tr>
			</table>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Отменить</button>
                <input name='addPeople' type="submit" class="btn btn-primary" value="ОК">
            </div>
        </fieldset>
		</form>	
    </div>
	</div>	