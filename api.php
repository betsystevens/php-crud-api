<?php
// connect to pdo mysql
include __DIR__ . '/DatabaseConnection.php';
include __DIR__ . '/DatabaseFunctions.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

$table = preg_replace('/[^a-z0-9_]+/i', '',array_shift($request));
$result = getAll($pdo, $table);
if(!$result) {
  http_response_code(404);
  die('Database error');
}
header("Access-Control-Allow-Origin: *");
echo json_encode($result);