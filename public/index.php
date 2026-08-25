<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->get('/nome', function ($request, $response) {
    $response->getBody()->write(json_encode(['nome' => 'Felipe']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/curso', function ($request, $response) {
    $response->getBody()->write(json_encode(['curso' => 'Informática']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/gato', function ($request, $response) {
    $response->getBody()->write(json_encode(['gato' => 'miau']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/dog', function ($request, $response) {
    $response->getBody()->write(json_encode(['dog' => 'woof']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/telefone', function ($request, $response) {
    $response->getBody()->write(json_encode(['telefone' => '123456789']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/desmotivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['desmotivacional' => 'Você não é capaz de alcançar qualquer coisa que se proponha!']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/motivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['motivacional' => 'Você é capaz de alcançar qualquer coisa que se proponha!']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/musica', function ($request, $response) {
    $response->getBody()->write(json_encode(['motivacional' => 'Você é capaz de alcançar qualquer coisa que se proponha!']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'filme1' => 'Deu a Louca Na Chapeuzinho',
        'filme2' => 'Comer, Rezar e Amar',
        'filme3' => 'Os Vingadores: Ultimato',
        'filme4' => 'Homem Aranha: Um Novo Dia',
        'filme5' => 'Apenas Um Show: O Filme',
        'filme6' => 'Star Wars: O Império Contra Ataca',
        'filme7' => 'Um Novo Dia',
        'filme8' => 'The Seven',
        'filme9' => 'Gosto de Cereja',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme/favoritos', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'filme1' => 'Deu a Louca Na Chapeuzinho',
        'filme2' => 'Os Vingadores: Ultimato',
        'filme3' => 'Homem Aranha: Um Novo Dia',
        'filme4' => 'Apenas Um Show: O Filme',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme/notas', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'filme1' => '4',
        'filme2' => '2',
        'filme3' => '9',
        'filme4' => '6',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/tic', function ($request, $response) {
    $response->getBody()->write(json_encode(['tic' => 'Toc']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->run();