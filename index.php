<?php

class pessoa{


    private string $nome;
    private int $idade;
    private int $cpf;

    public function _construct(string $nome, int $idade, int $cpf)
    {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->cpf = $cpf;

    }
}
$pessoa01 = new Pessoa('Daniel', 17, 18123524242);

class product{

    private string $nome;
    private int $valor;
    private int $quantidade;
    private string $categoria;

    public function _contruct(
        string $nome,
        int $valor,
        int $quantidade,
        string $categoria
    )
    {
        $this ->nome = $nome;
        $this ->valor = $valor;
        $this ->quantidade = $quantidade;
        $this ->categoria = $categoria;
    }
    public function pegarNome() {
        return $this->nome;
    }
     
    public function pegarValor() {
        return $this->valor;
    }
    public function pegarQuantidade() {
        return $this->quantidade;
    }
    public function pegarCategoria() {
        return $this->categoria;
    }
}

$produto01 = new product('bananinha', 2, 15, 'alimento')

?>