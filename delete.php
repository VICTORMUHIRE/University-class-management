<?php 

if(isset($_GET["id"])){
    $id = $_GET["id"];

    
    $servername = "localhost";
    $username = "root";
    $password ="" ;
    $database = "university";
    $connection = new mysqli($servername, $username, $password,$database);

    $sql = "DELETE FROM gestion WHERE id = $id";
    $result = $connection->query($sql); 

    $sqlt = "DELETE FROM types WHERE id = $id";
    $result = $connection->query($sqlt); 




}

?>