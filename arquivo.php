<?php

$matricula = $_POST["matricula"];    
$nome = $_POST["nome"];

$empregados = [];  // Variável usada para guardar os dados acima no formato JSON.



// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
$resposta = 
      [
            "matricula" => $matricula,
            "nome"  => $nome
      ];

array_push($empregados, $resposta);
// Até aqui ficaria dentro do WHILE.


// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["empregados" => $empregados]);



include("conecta.php");



      $comando = $pdo->prepare("INSERT INTO dados VALUES($matricula,\"$nome\")");
      $resultado = $comando->execute();
     





echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html


?>