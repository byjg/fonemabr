<?php

require 'vendor/autoload.php';

$fonema = new \ByJG\FonemaBR();

$lista = [
	"ambulancia",
	"anbulancia",
	"enfase",
	"emfase",
	"pitomba",
	"pitonba",

	"praça",
	"PRAÇA",
	"vagner",
	"vagrant",
	"arranhado",
	"arranado",
	"brazilia",
	"brasilia",
	"brasil",
	"hortolândia",
	"chave",
	"chavear",
	"chuva",
	"exclarecido",  // RESOLVER
	"esclarecido",  // RESOLVER
	"mexe",
	"mesa",
	"casa",
	"facção",  // Retirar acentos. Está bagunçando.
	"sessão",
	"seção",
	"áéíóúàèìòùãẽĩõũâêîôûäëïöü",  // Resolver!
];

foreach($lista as $palavra)
{
	echo $palavra . ": " . $fonema->converte($palavra) . "\n";
}