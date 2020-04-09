<html>
    <head>
        <meta charset="utf-8">
        <h1> Товары </h1>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" /> 
    </head>
    <body>
    <form enctype="multipart/form-data" action="saveFile.php" method="POST">
            <input type="file" name="userfile" method="POST"><br>
            table:<input type="text" name="table" method="POST"><br>
            vendor:<input type="text" name="vendor" method="POST"><br>
            name:<input type="text" name="name" method="POST"><br>
            operating force:<input type="text" name="operating_force" method="POST"><br>
            life cycle:<input type="text" name="life" method="POST"><br>
            item:<input type="text" name="item" method="POST"><br>
            price:<input type="text" name="price" method="POST"><br>
            <input type="submit" value="отправить файл"><br>
        </form>
    </body>
</html>
