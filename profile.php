<?php
	session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" /> 
    </head>
    <body class="background_image" id="background_index">
    <header class="header">
            <h1 class="logo">
                <a href="index.php">
                    <font color="#E5B37E">
                        KBDfans Russia
                    <font color="#696468">
                        Магазин клавиатур
                    <font color="#696468"><font size="3">
                    <div class="padding_account">
						<?php
                        if (isset($_SESSION['user'])) {
							echo ('<font color="#b28861">Добро пожаловать,&nbsp</font>' . $_SESSION['user']['login']);
						}
                        ?>
                    </div>
                    </font></font>
                </a>
            </h1>
            <ul class="main-nav">
                <li><a href="index.php">Главная</a></li>
                <li><a href="About_us.php">О нас</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="products.php">Магазин</a></li>
                <li>
                    <?php
                        if (isset($_SESSION['user'])) {
                            ?>
                            <a href="profile.php">
                                Профиль
							</a>
                            <?php 
                        		} else {
							?>
                            <a href="login.php">Вход</a>
                            <?php
                        }
                    ?>
                </li>
            </ul>
        </header>
        </font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font>
        <div class="padding_profile">
			<div class="flex">
                <div class="shape_profile">
                    <h1><p align="center"><font color="#E5B37E"><font size="15">Профиль:</font></font></p></h1>
                    <?php
                        include('config.php');
                        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
                        $id_avatar = $_SESSION['user']['id'];
                        $name_user = $_SESSION['user']['login'];
                        $avatar = mysqli_query($mysqli, "SELECT `path` FROM `users` WHERE id = $id_avatar");
                        $r = mysqli_fetch_array($avatar);
                        
                        $profile_avatar = $r['path'];

                        $padding_profile = 'padding_profile';
                        $profile = 'profile';
                        $flex_profile = 'flex_profile';
                        $div1 = 'div1';
                        $margin_aboutus = 'margin_aboutus';
                        $div2 = 'div2';
                        $round = 'round';
                        $color_for_text = '#E5B37E';
                        $font_size = 6;
                        $width = 100;
                        $height = 100;
                        $logout = 'logout.php';
                        echo "
                        <div class=".$padding_profile.">
                            <div class=".$profile.">
                                <div class=".$flex_profile.">
                                    <div id=".$div1.">
                                        <img src=".$profile_avatar." width=".$width." height=".$height." class=".$round.">
                                    </div>
                                    <div class=".$margin_aboutus.">
                                        <div id=".$div2."><font color=".$color_for_text."><font size=".$font_size.">Имя: $name_user</font></font></font><br>
                                    </div>
                                    <a href=".$logout.">
                                        выход
		                            </a>
                                </div>
                            </div>       
                        </div>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
