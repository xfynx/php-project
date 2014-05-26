<div class="span12">
	<br>
<div class="row-fluid">
<div class="span6 offset5">
	<p class="lead">Данные о мероприятиях</p>
</div>
</div>

<table class="table table-condensed">
		<th>Id</th><th>Дата соревнования</th><th>Название</th><th>Место проведения</th><th>Судейская должность</th>
        <?php foreach ($aSorevnovaniya as $nsorevnovaniya) : ?>
		<tbody>
		<tr>
			<form method="GET">
				
				<td>
					<input class="input-mini" type="text" readonly="readonly" name="sorevnovaniyaId"
						value="<?php echo $nsorevnovaniya->e_id_sorevnovaniya?>"	
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="sorevnovaniyaDate_sor"
						value="<?php echo $nsorevnovaniya->date_sor?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="sorevnovaniyaName_sor"
						value="<?php echo $nsorevnovaniya->name_sor?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="sorevnovaniyaMesto"
						value="<?php echo $nsorevnovaniya->mesto?>"
					/>
				</td>
				<td>
					<input class="input-small" type="text" name="sorevnovaniyaSud_dolgn"
						value="<?php echo $nsorevnovaniya->sud_dolgn?>"
					/>					
				</td>
				<td>
					<input hidden name="sorevnovaniyaEvent_id"
						value="<?php echo $nsorevnovaniya->event_id?>"
					/>					
				</td>
                                
				<td><input name="deleteSorevnovaniya" class="btn btn-danger" type="submit" value="X"/></td>	
				<td><input name="editSorevnovaniya" class="btn btn-primary" type="submit" value="EDIT"/></td>	
			</form>
		</tr>		
	</tbody>	
	<?php endforeach;?>
	</table>

<a href="#addSorevnovaniya" role="button" class="btn btn-primary" data-toggle="modal">Добавить событие</a>
	
	<div class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true"
         id="addSorevnovaniya" title="block.confirm.title">
        <form method="GET" style="width: 250px;">
		<fieldset>

            <div class="modal-header">
                <p>Создать новую запись</p>
            </div>

            <div class="modal-body">
			<table>
			<tr>
				<td><label for="sorevnovaniyaId">Id</label></td>
				<td><input type="text" id="sorevnovaniyaId" name="sorevnovaniyaId"/></td>
			</tr>
			<tr>	
				<td><label for="sorevnovaniyaDate_sor">Дата соревнования</label></td>
				<td><input type="text" id="sorevnovaniyaDate_sor" name="sorevnovaniyaDate_sor"></td>
			</tr>
			<tr>
				<td><label for="sorevnovaniyaName_sor">Название</label></td>
				<td><input type="text" id="sorevnovaniyaName_sor" name="sorevnovaniyaName_sor"/></td>
			</tr>
			<tr>
				<td><label for="sorevnovaniyaMesto">Место проведения</label></td>
				<td><input type="text" id="sorevnovaniyaMesto" name="sorevnovaniyaMesto"/></td>
			</tr>
			<tr>
				<td><label for="sorevnovaniyaSud_dolgn">Судейская должность</label></td>
				<td><input type="text" id="sorevnovaniyaSud_dolgn" name="sorevnovaniyaSud_dolgn"/></td>
			</tr>
			</table>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Отменить</button>
                <input name='addSorevnovaniya' class="btn btn-primary" type="submit" value="ОК">
            </div>
        </fieldset>
		</form>	
    </div>		
</div>
