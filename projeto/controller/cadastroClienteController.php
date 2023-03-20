<?php 
class cadastroClienteController {

  public function exibirFormularioCadastro() {
    require_once 'view/cadastro-cliente.php';
  }

  public function cadastrarCliente() {

    // Define o nível de exibição de erros
    error_reporting(E_ALL);

    // Define o diretório para exibição de erros
    ini_set('display_errors', 1);
  
    // verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      // se não, retornar para a página de cadastro
      require_once 'view/cadastro-cliente.php';
      return;
    }

    // obter os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['data_nascimento'];
    $ocupacao = $_POST['ocupacao'];
    
    // criar um objeto Cliente com os dados do formulário
    $cliente = new Cliente($nome, $cpf, $telefone, $email, $sexo, $dataNascimento, $ocupacao);
  
    // Conexao ao banco de dados
    $host = "sql101.epizy.com";
    $user = "epiz_33822337";
    $pass = "Nj4CWXElAeg";
    $dbname = "epiz_33822337_clientes";

    $conexao = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conexao) {
        die("Erro de conexão: " . mysqli_connect_error());
    }

    // Define a codificação de caracteres para a conexão
    mysqli_set_charset($conexao, "utf8");

    // Executa o código SQL de inserção de dados
    $sql = "INSERT INTO Cliente (nome, cpf, telefone, email, sexo, dataNascimento, ocupacao) VALUES ('$nome', '$cpf', '$telefone', '$email', '$sexo', '$dataNascimento', '$ocupacao')";
    if (!mysqli_query($conexao, $sql)) {
      echo "Erro ao inserir registro: " . mysqli_error($conexao);
      mysqli_close($conexao);
      return;
    }

    mysqli_close($conexao);

    // enviar um email de confirmação para o cliente
    $assunto = 'Confirmação de cadastro';
    $mensagem = 'Seu cadastro foi realizado com sucesso.';
    
    //email($email, $assunto, $mensagem);
    mail("cadastro@unimed.com", $email,$assunto, $mensagem);

    // retornar a view de confirmação de cadastro para o cliente
    require_once 'view/confirmacao-cadastro.php';
  }

}

?>