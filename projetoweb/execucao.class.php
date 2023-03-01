<?php
//Importação
require_once("pessoa.classe.php");
//
class Teste{
    private $pessoa;

    public function __construct(){
        //Objeto chamado pessoa que recebe a classe pessoa
        $pessoa = new Pessoa();
        //Passar valor para o metodo setNome-
        $pessoa->setNome("JUJU");
        //Imprimir o valor do metodo getNome
        echo $pessoa->getNome();

    }
}new Teste();
?>