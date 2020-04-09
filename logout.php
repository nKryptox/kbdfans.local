<?php
	session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" /> 
    </head>
    <body class="background_image" id="background_index">
    <?php
        unset($_SESSION['name']);
        session_destroy();
        exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
    ?>
    </body>
</html>