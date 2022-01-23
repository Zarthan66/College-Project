<?php
    try {
        $con = new PDO('mysql:host=localhost;dbname=2005040041','root', '', array(PDO::ATTR_PERSISTENT => true));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    include_once 'database.php';
    $user = new Database($con);
?>