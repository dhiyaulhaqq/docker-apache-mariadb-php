<?php
$user = 'root';
$pass = 'example';
$mysqli = new mysqli("localhost", $user, $password);
if ($mysqli) {
  echo 'connection success';
}

echo 'failed';

?>
