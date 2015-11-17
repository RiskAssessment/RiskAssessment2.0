<?php
include 'conexao.php';
    
    //Consultando banco de dados
    $qryLista = mysql_query("select * FROM cliente"); 
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>