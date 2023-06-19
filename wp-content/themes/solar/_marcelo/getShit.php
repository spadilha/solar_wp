<?php declare(strict_types=1);

function getShit(): void {


	$chave    = $_GET["chave"];

    $result = file_get_contents( "https://www.car.gov.br/imovel/demonstrativo/". $chave ."/gerar" );

    echo json_encode( $result );
	die;
}

add_action( 'wp_ajax_nopriv_getShit', 'getShit' );
add_action( 'wp_ajax_getShit', 'getShit' );
