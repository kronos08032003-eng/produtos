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
$app->get('/nome/xml', function ($request, $response) {
    $response->getBody()->write("<nome>Felipe</nome>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/curso', function ($request, $response) {
    $response->getBody()->write(json_encode(['curso' => 'Informática']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/curso/xml', function ($request, $response) {
    $response->getBody()->write("<curso>Informática</curso>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/gato', function ($request, $response) {
    $response->getBody()->write(json_encode(['gato' => 'miau']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/gato/xml', function ($request, $response) {
    $response->getBody()->write("<gato>miau</gato>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/dog', function ($request, $response) {
    $response->getBody()->write(json_encode(['dog' => 'woof']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/dog/xml', function ($request, $response) {
    $response->getBody()->write("<dog>au</dog>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/telefone', function ($request, $response) {
    $response->getBody()->write(json_encode(['telefone' => '123456789']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/telefone/xml', function ($request, $response) {
    $response->getBody()->write("<telefone>123456789</telefone>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/desmotivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['desmotivacional' => 'Você não é capaz de alcançar qualquer coisa que se proponha!']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/desmotivacional/xml', function ($request, $response) {
    $response->getBody()->write("<mensagem>Você é horrível</mensagem>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/motivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['motivacional' => 'Você é capaz de alcançar qualquer coisa que se proponha!']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/motivacional/xml', function ($request, $response) {
    $response->getBody()->write("<mensagem>Você é incrível</mensagem>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/musica', function ($request, $response) {
    $response->getBody()->write(json_encode(['musica' => 'Espresso']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/musica/xml', function ($request, $response) {
    $response->getBody()->write("<musica>Espresso</musica>");
    return $response
              ->withHeader('Content-Type', 'application/xml')
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

$app->get('/filme/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>Deu a Louca Na Chapeuzinho</filme1>
        <filme2>Comer, Rezar e Amar</filme2>
        <filme3>Os Vingadores: Ultimato</filme3>
        <filme4>Homem Aranha: Um Novo Dia</filme4>
        <filme5>Apenas Um Show: O Filme</filme5>
        <filme6>Star Wars: O Império Contra Ataca</filme6>
        <filme7>Um Novo Dia</filme7>
        <filme8>The Seven</filme8>
        <filme9>Gosto de Cereja</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
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
$app->get('/filme/favoritos/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>Deu a Louca Na Chapeuzinho</filme1>
        <filme2>Os Vingadores: Ultimato</filme2>
        <filme3>Homem Aranha: Um Novo Dia</filme3>
        <filme4>Apenas Um Show: O Filme</filme4>"

           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
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
$app->get('/filme/notas/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>4</filme1>
        <filme2>2</filme2>
        <filme3>9</filme3>
        <filme4>6</filme4>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});


$app->get('/filme/diretores', function ($request, $response) {

    $response->getBody()->write(json_encode([

        'filme1' => 'Jorge',
        'filme2' => 'Maria',
        'filme3' => 'João',
        'filme4' => 'Caio',
        'filme5' => 'Meion',
        'filme6' => 'Lourenzo',
        'filme7' => 'Jânio',
        'filme8' => 'Mario',
        'filme9' => 'Lázaro',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme/diretores/xml', function ($request, $response) {

    $response->getBody()->write(
        "<filme1>Jorge</filme1>
        <filme2>Maria</filme2>
        <filme3>João</filme3>
        <filme4>Caio</filme4>
        <filme5>Meion</filme5>
        <filme6>Lourenzo</ filme6>
        <filme7>Jânio</filme7>
        <filme8>Mario</ filme8>
        <filme9>Lázaro</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});



$app->get('/filme/aprovados', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme1' => 'Aprovado',
        'filme2' => 'Aprovado',
        'filme3' => 'Aprovado',
        'filme4' => 'Aprovado',
        'filme5' => 'Aprovado',
        'filme6' => 'Aprovado',
        'filme7' => 'Aprovado',
        'filme8' => 'Aprovado',


           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme/aprovados/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>Aprovado</filme1>
        <filme2>Aprovado</filme2>
        <filme3>Aprovado</filme3>
        <filme4>Aprovado</filme4>
        <filme5>Aprovado</filme5>
        <filme6>Aprovado</filme6>
        <filme7>Aprovado</filme7>
        <filme8>Aprovado</filme8>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});





$app->get('/filme/reprovados', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme9' => 'Reprovado',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});

$app->get('/filme/reprovados/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme9>Reprovado</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});



$app->get('/filme/origem', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme1' => 'EUA',
        'filme2' => 'EUA',
        'filme3' => 'BR',
        'filme4' => 'EUA',
        'filme5' => 'EUA',
        'filme6' => 'EUR',
        'filme7' => 'EUA',
        'filme8' => 'EUA',
        'filme9' => 'BR',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->get('/filme/origem/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>EUA</filme1>
        <filme2>EUA</filme2>
        <filme3>BR</filme3>
        <filme4>EUA</filme4>
        <filme5>EUA</filme5>
        <filme6>EUR</filme6>
        <filme7>EUA</filme7>
        <filme8>EUA</filme8>
        <filme9>BR</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});




$app->get('/filme/custo', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'filme1' => '100000',
        'filme2' => '500000',
        'filme3' => '4000000000',
        'filme4' => '670000',
        'filme5' => '89000000',
        'filme6' => '3899999',
        'filme7' => '4900000000',
        'filme8' => '488888880',
        'filme9' => '29000',
           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});

$app->get('/filme/custo/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>100000</filme1>
        <filme2>500000</filme2>
        <filme3>4000000000</filme3>
        <filme4>670000</filme4>
        <filme5>89000000</filme5>
        <filme6>3899999</filme6>
        <filme7>4900000000</filme7>
        <filme8>488888880</filme8>
        <filme9>29000</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});




$app->get('/filme/lucro', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme1' => '400000',
        'filme2' => '700000',
        'filme3' => '2000000000',
        'filme4' => '970000',
        'filme5' => '89000000',
        'filme6' => '3899999',
        'filme7' => '4900000000',
        'filme8' => '288888880',
        'filme9' => '779000',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});

$app->get('/filme/lucro/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>400000</filme1>
        <filme2>700000</filme2>
        <filme3>2000000000</filme3>
        <filme4>970000</filme4>
        <filme5>89000000</filme5>
        <filme6>3899999</filme6>
        <filme7>4900000000</filme7>
        <filme8>288888880</filme8>
        <filme9>779000</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});





$app->get('/filme/atores', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme1' => '4000',
        'filme2' => '7000',
        'filme3' => '200000',
        'filme4' => '9700',
        'filme5' => '89000',
        'filme6' => '39999',
        'filme7' => '49000',
        'filme8' => '28880',
        'filme9' => '7000',

           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});

$app->get('/filme/atores/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>4000</filme1>
        <filme2>7000</filme2>
        <filme3>200000</filme3>
        <filme4>9700</filme4>
        <filme5>89000</filme5>
        <filme6>39999</filme6>
        <filme7>49000</filme7>
        <filme8>28880</filme8>
        <filme9>7000</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});






$app->get('/filme/lançamento', function ($request, $response) {
    $response->getBody()->write(json_encode([

        'filme1' => '2000',
        'filme2' => '2000',
        'filme3' => '2000',
        'filme4' => '2010',
        'filme5' => '2009',
        'filme6' => '1999',
        'filme7' => '2008',
        'filme8' => '1980',
        'filme9' => '1967',
           ]));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});

$app->get('/filme/lançamento/xml', function ($request, $response) {
    $response->getBody()->write(
        "<filme1>2000</filme1>
        <filme2>2000</filme2>
        <filme3>2000</filme3>
        <filme4>2010</filme4>
        <filme5>2009</filme5>
        <filme6>1999</filme6>
        <filme7>2008</filme7>
        <filme8>1980</filme8>
        <filme9>1967</filme9>"
           );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});

$app->get('/tic', function ($request, $response) {
    $response->getBody()->write(json_encode(['tic' => 'Toc']));
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(200);
});
$app->run();

$app->get('/tic/xml', function ($request, $response) {
    $response->getBody()->write(
        "<tic>Toc</tic>"
    );
    return $response
              ->withHeader('Content-Type', 'application/xml')
              ->withStatus(200);
});