<?php
require 'vendor/autoload.php';
require 'js/Service.js';

$app = new \Slim\Slim();

$app->delete('/service/:id', function($id) use ( $app ) {
    if(deletar($id)) {
      echo "Funcionario $id deletado";
    }
    else {
      $app->response->setStatus('404');
      echo "Funcionario com = $id não encontrado";
    }
});

$app->run();
?>