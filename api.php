<?php
// connect to pdo mysql
include __DIR__ . '/DatabaseConnection.php';
include __DIR__ . '/DatabaseFunctions.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
header("Access-Control-Allow-Origin: *");

$table = 'flower';
$sort = 'flowerid';
$result = getAllOrderBy($pdo, $table, $sort);
if(!$result) {
  http_response_code(404);
  die('Database error');
}
echo json_encode($result);