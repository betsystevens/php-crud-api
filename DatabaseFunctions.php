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
	return $result->fetchAll(PDO::FETCH_ASSOC);
}