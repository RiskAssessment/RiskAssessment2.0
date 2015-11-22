<?php
include 'conexao.php';

$del = "DELETE FROM cliente WHERE ID = '' ";
$delgo = mysql_query($del) or die('Erro ao deletar');
echo "deletado";

?>