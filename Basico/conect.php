<?php
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			erro_banco();
		}
		if(!mysql_select_db('basico',$db)){
			erro_banco();
		}
?>


