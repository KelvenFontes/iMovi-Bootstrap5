<?php

    try{
        $conn = new PDO('mysql:host=localhost;dbname=imovel', 'root', '')
    } catch(PDOException $e){
        $e -> getMessage();
    }

?>