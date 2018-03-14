<?php
    $username = "henriqu7";
    $password = "dica300986";
    try {
        $conn = new PDO('mysql:host=155.94.64.210;dbname=henriqu7_site', $username, $password);
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    
    function devolveLinha($sql){
        $result = mysql_query($query) or die('Falha na instrução SQL: ' . mysql_error());
        # Filtra através das linhas de consulta
        $row = mysql_fetch_object($result);
    }

?> 