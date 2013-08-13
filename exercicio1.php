<?php

// Verifica se o valo está vindo via GET ou POST e inclui numa variavel $n

if(!empty($_GET['n'])){ // Verifico se o valor está vindo via GET (Pela URL (http://www.php.net/manual/pt_BR/reserved.variables.get.php))

	// Se meu valor está vindo pela URL, adiciona na variavel
	$n = $_GET['n'];

}else{

	// Meu valor não esta vindo via GET

	if(!empty($_POST['n'])){ // verifico se está vindo via POST (Formulário (http://php.net/manual/en/reserved.variables.post.php))
		$n = $_POST['n'];
	}

}

// O Código abaixo verifica se a minha variavel $n é maior que 100.

if($n > 100){
	
	echo $n;

}else{

	$n = 0;

	echo $n;

}

// Evitei de usar um ELSE IF para não complicar, que seria mais apropriado para a primeira condição, onde verifico se o meu valor está vindo via GET ou POST.