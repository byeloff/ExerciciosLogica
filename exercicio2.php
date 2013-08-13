<?php

// Verifica se o valo está vindo via GET ou POST e inclui numa variavel $numero

if(!empty($_GET['n'])){ // Verifico se o valor está vindo via GET (Pela URL (http://www.php.net/manual/pt_BR/reserved.variables.get.php))

	// Se meu valor está vindo pela URL, adiciona na variavel
	$numero = $_GET['n'];

}else{

	// Meu valor não esta vindo via GET

	if(!empty($_POST['n'])){ // verifico se está vindo via POST (Formulário (http://php.net/manual/en/reserved.variables.post.php))
		$numero = $_POST['n'];
	}

}

// O Código abaixo verifica se a minha variavel é positiva ou negativa e armazena em variaveis diferentes.
if($numero > 0){

	$a = $numero;

	echo 'Sua variavel é positiva: '.$a;

}else{

	$b = $numero;

	echo 'Sua variavel é negativa: '.$b;

}

// Evitei de usar um ELSE IF para não complicar, que seria mais apropriado para a primeira condição, onde verifico se o meu valor está vindo via GET ou POST.