<?php
	$erro = false;
	
if (!isset($_POST ) || empty ($_POST) ) {
	$erro = 'nada foi postado.';

}

foreach ($_POST as $chave => $valor){
	
	$$chave =trim (strip_tags($valor) );
	if(empty ($valor)) {
		$erro = 'Existem campos em branco.';
		
	}
}

if ( (! isset ($idade) || ! is_numeric ($idade)  ) && !$erro) {
	$erro= 'a idade deve ser um valor numero.';

}

if ((! isset ($site) || ! filter_var($site, FILTER_VALIDATE_URL)) && !$erro) {
	$erro = 'envie um site valido';
	
}

if ((! isset($email) || ! filter_var ($email, FILTER_VALIDATE_EMAIL)) && !erro) {
	$erro = 'Envie um email valido';
}

if ($erro) {
	echo $erro;
} else {
	echo "<h1> veja os dados enviados</h1>";
	
	foreach( $_POST as $chave => $valor) {
		echo '<b>' . $chave . '</b>' . $valor . '<br><br>';
	}
}