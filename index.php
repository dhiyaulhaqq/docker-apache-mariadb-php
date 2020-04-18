<?php
$user = 'root';
$pass = 'example';
$mysqli = new mysqli("localhost", $user, $password);
if ($mysqli) {
  echo 'connection success';
} else {
  echo 'failed';
}

$mysqli = null;

?>
