<?php
header("Access-Control-Allow-Origin: *");
include __DIR__ . '/DatabaseConnection.php';

$table = 'flower';
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