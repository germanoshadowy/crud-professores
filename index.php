<?php

/*
$professores=$db->query("SELECT * FROM professor");

while ($professor = $professores->fetch(PDO::FETCH_OBJ)) {
    echo "Nome: {$professor->nome}<br />";
}
*/
include "./classes/Professor.php";
$professores=Professor::listar();

foreach($professores AS $professor){
    echo "Código : {$professor->getCodigo()}<br>";
    echo "Nome :{$professor->getNome()}<br>";
    echo "-------------------------------------------<br>";
}

$professor=new Professor();
$professor->setProfessor(null, "Malaquias Fulgencio");
var_dump($professor);
$professor->salvar();