<?php

require_once 'model/cliente.php';
require_once 'controller/cadastroClienteController.php';
    // Define o nível de exibição de erros
    error_reporting(E_ALL);

    // Define o diretório para exibição de erros
    ini_set('display_errors', 1);

  $cadastroClienteController = new CadastroClienteController();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $cadastroClienteController->cadastrarCliente();
  } else {
      $cadastroClienteController->exibirFormularioCadastro();
  }
?>