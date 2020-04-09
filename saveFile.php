<?php
    include('config.php');
    $table = $_POST['table'];
    $vendor = $_POST['vendor'];
    $item = $_POST['item'];
    $name = $_POST['name'];
    $operating_force = $_POST['operating_force'];
    $life = $_POST['life'];
    $price = $_POST['price'];
    $uploadDir = 'E:/OSPanel/domains/kbd.local/shop/';
    $uploaddir = 'shop/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        $mysql = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $query = "INSERT INTO `$table`(`item`, `vendor`, `name`, `operating force`, `life`, `price`, `path`) VALUES ('$item','$vendor','$name',' $operating_force','$life','$price','$uploadfile')";
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