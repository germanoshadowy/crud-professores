<?php

class Aluno{
    private $codigo;
    private $nome;
    private $matricula;
    private $turma;

    public function setAluno($codigo,$nome,$matricula,$turma){
        $this->codio=$codigo;
        $this->nome=$nome;
        $this->matricula=$matricula;
        $this->turma=$turma;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function getTurma(){
        return $this->turma;
    }
}