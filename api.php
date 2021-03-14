<?php

include __DIR__ . '/DatabaseConnection.php';
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
// for put or post requests the body will be put in php://input
$input = json_decode(file_get_contents('php://input'),true);

// $table = 'flower';
$table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
$key = array_shift($request)+0;
// retrieve the table and key form the path
$sql = "select * from `$table`";
$result = mysqli_query($link,$sql);
if(!$result) {
  http_response_code(404);
  die(mysqli_error());
}
if (!$key) echo '[';
for ($i=0; $i<mysqli_num_rows($result);$i++){
  echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
}
if (!$key) echo ']';


// close mysql connection
mysqli_close($link);