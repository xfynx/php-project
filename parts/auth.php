<?php if ($currentUser) : ?>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
  <div class="container">
      <a class="brand">База сотрудников туристической школы</a>

	<ul class="nav pull-right">
    <li>
        <div class="btn-group">
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                <span style="font-weight: bold; font-size: 1.3em;"><?php echo $currentUser->fname;?><span class="caret"></span></span>
            </a>
            <ul class="dropdown-menu">
                <li><form method="post" class="form-inline">
					<button class="btn btn-primary btn-block" type="submit"type="submit" name="exit" value="Выход">logout</button>	
				</form></li>
            </ul>
        </div>
    </li>
</ul>
</div>
</div>
</div>
	
<?php else : ?>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span4 offset4">
	<form class="form-signin" method="post">
	<h2 class="form-signin-heading">Вход</h2>
	<input type="text" class="input-block-level" placeholder="адрес эл.почты" id="email" name="email">
	<input type="password" class="input-block-level" placeholder="Пароль" id="password" name="password">
	<label class="checkbox">
	<input type="checkbox" value="remember-me" id="remember_me" name="remember_me"> Запомнить меня
	</label>
	<button class="btn btn-large btn-primary" type="submit" value="OK" name='ok' id='ok'>Войти</button>
	</form>
	</div>  
	</div>
	</div>
<?php endif;?>
