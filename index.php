<?php

// Um unico "require" traz todas as dependencias do projeto.
require_once './vendor/autoload.php';

// O "require" acima ja trouxe a classe, e sem o "as" gera um warning.
use \GUMP as GUMP;

// Array com os dados a serem validados.
$dados_form = array(
	'nome' => 'Éderson',
	'email' => 'edersonluis.rf@gmail.com'
);

// Array com as regras para validacao.
$regras = array(
	'nome' => 'required|max_len,100|min_len,3', // Campo obrigatorio, maximo de 100 caracteres e minimo de 3 caracteres.
	'email' => 'required|valid_email' // Campo obrigatorio e ser um email valido.
);

$is_valid = GUMP::is_valid($dados_form, $regras);

if ($is_valid === true) {
	echo "Dados corretos, cadastrar!";
} else {
	echo "Dados incorretos, verificar!";
	echo "<pre>";
		print_r($is_valid);
	echo "</pre>";
}