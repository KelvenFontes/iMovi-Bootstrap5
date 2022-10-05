<?php

    include_once('conexao.php');

    $tipoImovel = $_POST['true ou false'];
    
    
    $sql = 'INSERT INTO tabelaImoveis('
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':', $);
    $

?>