<div class="span12">
	<br>
<div class="row-fluid">
<div class="span6 offset5">
	<p class="lead">Данные о разрядах</p>
</div>
</div>	
	
<table class="table table-condensed">
		<th>Id</th><th>Разряд</th><th>Звание</th><th>Дата звания</th><th>Судейская квалификация</th><th>Дата судейской квалификации</th><th>Тренерская категория</th><th>Дата тренерской категории</th>
		<!---$e_id_razryad, $razryad, $zvanie, $date_zvanie, $sud_kval, $date_sud_kval, $tren_kat, $date_tren_kat --->
	<?php foreach ($aRazryad as $nrazryad) : ?>
		<tbody>
		<tr>
			<form method="GET">
				
				<td>
					<input class="input-mini" type="text" readonly="readonly" name="razryadId"
						value="<?php echo $nrazryad->e_id_razryad?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadRazryad"
						value="<?php echo $nrazryad->razryad?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadZvanie"
						value="<?php echo $nrazryad->zvanie?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadDate_zvanie"
						value="<?php echo $nrazryad->date_zvanie?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadSud_kval"
						value="<?php echo $nrazryad->sud_kval?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadDate_sud_kval"
						value="<?php echo $nrazryad->date_sud_kval?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadTren_kat"
						value="<?php echo $nrazryad->tren_kat?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="razryadDate_tren_kat"
						value="<?php echo $nrazryad->date_tren_kat?>"
					/>
				</td>				
				
				<td><input name="deleteRazryad" class="btn btn-danger" type="submit" value="X"/></td>	
				<td><input name="editRazryad" class="btn btn-primary" type="submit" value="EDIT"/></td>	
			</form>
		</tr>		
	</tbody>	
	<?php endforeach;?>
	</table>
	
<a href="#addRazryad" role="button" class="btn btn-primary" data-toggle="modal">Добавить разряд</a>
	
	<div class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true"
         id="addRazryad" title="block.confirm.title">
        <form method="GET" style="width: 250px;">
		<fieldset>

            <div class="modal-header">
                <p>Создать новую запись</p>
            </div>

            <div class="modal-body">
			<table>
			<tr>
				<td><label for="razryadId">ID</label></td>
				<td><input type="text" id="razryadId" name="razryadId"/></td>
			</tr>
			<tr>	
				<td><label for="razryadRazryad">Разряд</label></td>
				<td><input type="text" id="razryadRazryad" name="razryadRazryad"></td>
			</tr>
			<tr>
				<td><label for="razryadZvanie">Звание</label></td>
				<td><input type="text" id="razryadZvanie" name="razryadZvanie"/></td>
			</tr>
			<tr>
				<td><label for="razryadDate_zvanie">Дата звания</label></td>
				<td><input type="text" id="razryadDate_zvanie" name="razryadDate_zvanie"/></td>
			</tr>
			<tr>	
				<td><label for="razryadSud_kval">Судейская квалификация</label></td>
				<td><input type="text" name="razryadSud_kval"></td>
			</tr>
			<tr>	
				<td><label for="razryadDate_sud_kval">Дата судейской квалификации</label></td>
				<td><input type="text" name="razryadDate_sud_kval"></td>
			</tr>
			<tr>	
				<td><label for="razryadTren_kat">Тренерская категория</label></td>
				<td><input type="text" name="razryadTren_kat"></td>
			</tr>
			<tr>	
				<td><label for="razryadDate_tren_kat">Дата тренерской категории</label></td>
				<td><input type="text" name="razryadDate_tren_kat"></td>
			</tr>
			</table>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Отменить</button>
                <input name='addRazryad' class="btn btn-primary" type="submit" value="ОК">
            </div>
        </fieldset>
		</form>	
    </div>	
</div>	
	