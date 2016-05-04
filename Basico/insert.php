<?php
include "conect.php";
if (count($_POST)) {
	// Recebendo valores
	$nome = $_POST['nome'];


		//fazendo a inserção
		$sql = "insert into base (nome) values('$nome')";

                
		$rs = mysql_query($sql, $db);

		if (!$rs){
		erro_banco();

		}else{
			echo "<h1>INSERT COM SUCESSO</h1>";
		mysql_close($db);
}}
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
