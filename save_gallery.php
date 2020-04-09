<?php
    include('config.php');
    $uploadDirthumbs = 'E:/OSPanel/domains/kbd.local/thumbs/';
    $uploaddirthumbs = 'thumbs/';
    $uploadfilethumbs = $uploaddirthumbs . basename($_FILES['thumbs']['name']);
    $uploadDirimage = 'E:/OSPanel/domains/kbd.local/image/';
    $uploaddirimage = 'images/';
    $uploadfileimage = $uploaddirimage . basename($_FILES['image']['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['thumbs']['tmp_name'], $uploadfilethumbs) && move_uploaded_file($_FILES['image']['tmp_name'], $uploadfileimage)) {
        $mysql = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $query = "INSERT INTO `gallery`(`thumbs`, `image`) VALUES ('$uploadfilethumbs','$uploadfileimage')";
        $mysql->query($query);
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
    echo 'Некоторая отладочная информация:';
    print_r($_FILES);
    print "</pre>";
    echo $uploadfile;
?>