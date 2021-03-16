<?php

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}
function getAllOrderBy($pdo, $table, $orderBy){
	$sql = 'SELECT * FROM `' .$table.
						'` ORDER BY `' .$orderBy. '`';
	$result = query($pdo, $sql);
	// fetchAll() returns an array of all records retrieved
	return $result->fetchAll();	
}