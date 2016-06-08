<?php
function full_blog_array() {
    include ("connection.php");

    try{
        $results = $db->query("SELECT title, image, content, date FROM blog");
    } catch (Exception $e){
        echo "Unable to get results";
        exit;
    };
    $blog = $results->fetchAll();
    return $blog;
}

function get_blog_html($id , $item){
    $output = "<h3>" . $item["title"] . "</h3>";
    return $output;
}