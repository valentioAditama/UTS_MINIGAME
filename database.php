<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'uts_minigame'; 

    try {
        $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        // echo "database berhasil konek";
    } catch (PDOEcception $e) {
        die ("Error " . $e->getMessage());
    }
?>