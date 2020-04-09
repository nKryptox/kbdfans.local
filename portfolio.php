<?php
	session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="gallery.css" type="text/css" />
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
        </header></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font>
        <div id="gallery" style="width: 718px;">
            <div id="imagearea"style="width: 686px;height: 389px;">
                <div id="image" style="width: 686px;height: 389px;">
                        <a href="javascript:slideShow.nav(-1)" class="imgnav " id="previmg"></a>
                        <a href="javascript:slideShow.nav(1)" class="imgnav " id="nextimg"></a>
                </div>
            </div>
            <div id="thumbwrapper" style="height: 114px;width: 686px;">
                <div id="thumbarea">
                    <ul id="thumbs">
                        <?php
                            $str= mysqli_connect('localhost', 'root', '', 'kbd');
                            $select= mysqli_query($str, "SELECT * FROM `gallery`");
                            $width = 179;
                            $height = 100;
                            while ($r = mysqli_fetch_array($select)) {
                                $id = $r['id'];
                                $thumbs = $r['thumbs'];
                                $image = $r['image'];
                                echo "<li value=".$id."><img src= ".$thumbs." width=".$width." height=".$height.">";
                                echo "</li>";
                            }
                            mysqli_close($str);
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var imgid = 'image';
            var imgdir = 'images';
            var imgext = '.jpg';
            var thumbid = 'thumbs';
            var auto = true;
            var autodelay = 10;
        </script>
        <script type="text/javascript" src="slide.js">
        </script>
    </body>
</html>