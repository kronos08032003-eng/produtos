<?php
 
require __DIR__ . '/../vendor/autoload.php';
 
use Slim\Factory\AppFactory;
 
$app = AppFactory::create();
$app->addBodyParsingMiddleware();
 
$produtos = [
    ['id' => 1, 'nome' => 'Teclado'],
    ['id' => 2, 'nome' => 'Mouse'],
    ['id' => 3, 'nome' => 'Monitor'],
];
 
$app->get('/produtos', function ($request, $response) use ($produtos) {
 
    $response->getBody()->write(json_encode($produtos));
 
    return $response
 
        ->withHeader('Content-Type', 'application/json')
 
        ->withStatus(200);
 
});

$app->get('/produtos/{id}', function ($request, $response, $args) use ($produtos) {
 
    $id = $args['id'];
 
    foreach ($produtos as $produto) {
        if ($produto['id'] == $id) {
 
            $response->getBody()->write(json_encode($produto));
 
            return $response
 
                ->withHeader('Content-Type', 'application/json')
 
                ->withStatus(200);
        }
    }
 
    $response->getBody()->write(json_encode([
        'erro' => 'Produto não encontrado'
    ]));
 
    return $response
 
        ->withHeader('Content-Type', 'application/json')
 
        ->withStatus(404);
 
});
 
$app->post('/produtos', function ($request, $response) use (&$produtos) {
    $dados = $request->getParsedBody();
    $novoProduto = [
        'id' => count($produtos) + 1,
        'nome' => $dados['nome'],
        'pontos' => $dados['pontos']
    ];
    $produtos[] = $novoProduto;
    $response->getBody()->write(json_encode($novoProduto));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
});

$app->run();
 
