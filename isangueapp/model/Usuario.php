<?php

class Usuario{

    private $id;
    private $nome;
    private $email;
    private $tiposang;
    private $peso;
    private $altura;
    private $idade;


    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }

    function getEmail(){
        return $this->email;
    }
    function getTipoSang(){
        return $this->tiposang;
    }
    function getPeso(){
        return $this->peso;
    }
    function getAltura(){
        return $this->altura;
    }
    function getIdade(){
        return $this->idade;
    }


    function setId($id){
        $this->id = $id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setTipoSang($tiposang){
        $this->tiposang = $tiposang;
    }

    function setPeso($peso){
        $this->peso = $peso;
    }
    function setAltura($altura){
        $this->altura = $altura;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }

}


