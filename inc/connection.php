<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=portfolio; port=8888,"
        , "root"
        , "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setFetchMode(PDO::FETCH_ASSOC);
} catch(Exception $e) {
    echo "Unable to connect to database";
    echo $e->getMessage();
    exit;
};
?>