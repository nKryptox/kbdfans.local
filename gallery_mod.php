<html>
    <head>
        <meta charset="utf-8">
        <h1> Галерея </h1>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" /> 
    </head>
    <body>
    <form enctype="multipart/form-data" action="save_gallery.php" method="POST">
            <input type="file" name="thumbs" method="POST"><br>
            <input type="file" name="image" method="POST"><br>
            <input type="submit" value="отправить файл"><br>
        </form>
    </body>
</html>