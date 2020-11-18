<?php

	session_start();

	//estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);
	$data = str_replace ('#' , '-', $_POST['data']);
	$hora = str_replace('#', '-',  $_POST['hora']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . '#' . $data  . '#' . $hora    . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../../security/arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_chamado.php');
?>