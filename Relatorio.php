<?php
include 'conexao.php';




$query = mysql_query("select empresa as Empresa, count(risco) as Pessoas from cliente where risco >50 group by empresa");

 $table = array();
$table['cols'] = array(
	
    array('label' => 'Empresa', 'type' => 'string'),
	array('label' => 'Pessoas', 'type' => 'number')
);

$rows = array();
while($r = mysql_fetch_assoc($query)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array
	$temp[] = array('v' => $r['Empresa']);
	$temp[] = array('v' => (int) $r['Pessoas']); 
	
	
    $rows[] = array('c' => $temp);
}


$table['rows'] = $rows;


$jsonTable = json_encode($table);
echo $jsonTable;


