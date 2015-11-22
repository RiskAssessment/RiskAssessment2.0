<?php 
include 'conexao.php';

    
    //Consultando banco de dados
    $query = mysql_query("select * FROM cliente"); 
    $vetor[] = array($query); 
        
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>