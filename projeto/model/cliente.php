<?php
    // Define o nível de exibição de erros
    error_reporting(E_ALL);

    // Define o diretório para exibição de erros
    ini_set('display_errors', 1);

    class Cliente {
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $sexo;
        private $dataNascimento;
        private $ocupacao;

        public function __construct($nome, $cpf, $telefone, $email, $sexo, $dataNascimento, $ocupacao) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->sexo = $sexo;
            $this->dataNascimento = $dataNascimento;
            $this->ocupacao = $ocupacao;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function getOcupacao() {
            return $this->ocupacao;
        }

    }

?>
