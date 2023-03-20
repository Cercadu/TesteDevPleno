Teste prático DEV Pleno

Sistema de Cadastro de Clientes
Este projeto é um sistema de cadastro de clientes em PHP utilizando o framework Bootstrap para o front-end. Com ele, é possível cadastrar informações básicas de clientes, como Nome, CPF, Telefone, E-mail, Sexo, Data de Nascimento e Ocupação.

Instalação e Configuração
Para utilizar o sistema, basta clonar o repositório e configurar um servidor web local (como o Apache) para executar o PHP. É necessário também criar um banco de dados MySQL com uma tabela chamada "clientes", com os seguintes campos: id, nome, cpf, telefone, email, sexo, data_nascimento e ocupacao.
Para criar a tabela e os campos execute o comando abaixo no seu banco de dados.

CREATE TABLE cliente (
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sexo CHAR(1) NOT NULL,
    data_nascimento DATE NOT NULL,
    ocupacao VARCHAR(100) NOT NULL,
);

No código(controler/cadastroClienteController.php), é preciso preencher os dados de acesso ao banco de dados MySQL com as informações correspondentes ao seu ambiente de desenvolvimento. As variáveis que precisam ser preenchidas com as informações de acesso são:

  $host: nome do host do banco de dados;
  $user: nome do usuário do banco de dados;
  $password: senha do usuário do banco de dados;
  $database: nome da base de dados que será utilizada.


Utilização
Ao acessar o sistema pelo navegador, o usuário será direcionado para a página de cadastro de clientes. Após preencher todos os campos obrigatórios e clicar em "Cadastrar", os dados serão salvos no banco de dados e o usuário será redirecionado para uma página de confirmação de cadastro.
