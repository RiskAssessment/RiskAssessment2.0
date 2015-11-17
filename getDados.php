<?php
include 'conexao.php';
    
    //Consultando banco de dados
    $query = mysql_query("SELECT * FROM  cliente"); 
    while($resultado = mysql_fetch_assoc($query)){
    $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>