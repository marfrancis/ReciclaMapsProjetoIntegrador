<?php
/////////////////////////////////////////
// parâmetros de entrada da requisição //
// $_GET['categoria'];                 //
// $_GET['cidade'];                    //
/////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
// caso não seja ionformada nenhuma categoria, então retorna um vetor vazio //
//////////////////////////////////////////////////////////////////////////////
if(!isset($_GET['categoria']) || strlen($_GET['categoria']) == 0) die( json_encode([]) );

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// retorna um json estático com os marcadores, posteriormente deverá retornar do banco de dados com base na cidade e ids das categorias selecionadas //
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo json_encode([
	[
		'latitude' => '-23.605895',
		'longitude' => '-46.563433',
		'nome' => 'São Caetano',
		'endereco' => 'Rua ABC, 123, Bairro, Cidade / UF',
		'telefone' => '(11) 4444-4444'
	],
	[
		'latitude' => '-23.608490',
		'longitude' => '-46.566094',
		'nome' => 'São Caetano',
		'endereco' => 'Rua ABC, 123, Bairro, Cidade / UF',
		'telefone' => '(11) 4444-4444'
	],
	[
		'latitude' => '-23.607895',
		'longitude' => '-46.563433',
		'nome' => 'São Caetano',
		'endereco' => 'Rua ABC, 123, Bairro, Cidade / UF',
		'telefone' => '(11) 4444-4444'
	],
	[
		'latitude' => '-23.609490',
		'longitude' => '-46.566094',
		'nome' => 'São Caetano',
		'endereco' => 'Rua ABC, 123, Bairro, Cidade / UF',
		'telefone' => '(11) 4444-4444'
	],
]);
