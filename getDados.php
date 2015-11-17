<?php
include 'conexao.php';
    
    //Consultando banco de dados
    $qryLista = mysql_query("select * FROM cliente"); 
    while($resultado = mysql_fetch_assoc($qryLista)){
        $vetor[] = array($resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>