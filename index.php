<?php
$user = 'root';
$pass = 'example';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=mysql', $user, $pass);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo 'connection success';
?>
