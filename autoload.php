<?php
	function __autoload($className){
		include_once('models/'.$className.'.class.php');
	}
?>