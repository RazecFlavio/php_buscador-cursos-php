<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Razecflavio\BuscadorCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

TesteClass::teste();

echo PHP_EOL;

$client = new Client(['verify' => false, 'base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}