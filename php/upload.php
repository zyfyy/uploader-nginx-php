<?php

if (isset($_FILES['myFile'])) {
    $dir = dirname(__FILE__);
    $folder_name = $dir . "/uploads/";

    // var_dump($_FILES);

    move_uploaded_file($_FILES['myFile']['tmp_name'], $folder_name . str_replace(' ', '-', $_FILES['myFile']['name']));

    $info = $_FILES['myFile']['name'] . ',./uploads/' . $_FILES['myFile']['name'] . "\n";

    printf($info);
    exit;
}
?>