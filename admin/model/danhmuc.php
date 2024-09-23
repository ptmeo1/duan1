<?php
function insert_categories($catename){
    $sql = "INSERT INTO categories(category_name) VALUES ('$catename')";
    pdo_execute($sql);
}


?>