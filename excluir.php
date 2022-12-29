<?php

include_once("conexao.php");

$id = $_GET["id"];
	$result_pessoa = "DELETE FROM pessoas WHERE id='$id'";
	$resultado_pessoa = mysqli_query($conn, $result_pessoa);
		header("Location: exibicao.php");
?>