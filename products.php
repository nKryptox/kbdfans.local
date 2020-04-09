<?php
	session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="shop.css" type="text/css" /> 
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" /> 
    </head>
    <body>
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
            <li><a href="portfolio.php">Портфолио</a></li>
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
    </header></font></font></font></font></font></font></font></font></font></font>
        <?php
            $str= mysqli_connect('localhost', 'root', '', 'kbd');
            $select= mysqli_query($str, "SELECT * FROM `switches`");
            $width = 350;
            $height = 350;
            $divclassli = 'productwrapper';
            $classli = 'product';
            $productphoto = 'product-photo';
            $ahref = 'product';
            $ahref1 = '#';
            $color_for_text = '#b18a60';
            $padding = 'padding4';
            $font_size = '4';
            $font_size_1 = '6';
            $ulclass = 'products_clearfix';
            $font_face_m = 'Montserrat-Medium';
            $font_face_b = 'Montserrat-ExtraBold';
            $font_face_l = 'Montserrat-Light';
            $padding1 = 'products_padding';
            echo "<div class=".$padding1.">
                    <ul class=".$ulclass.">";
            while ($r = mysqli_fetch_array($select)) {
                $id = $r['id'];
                $vendor = $r['vendor'];
                $name = $r['name'];
                $item = $r['item'];
                $class = $r['class'];
                $price = $r['price'];
                $path = $r['path'];
                echo "
                    <li class=".$divclassli.">
                        <a href=".$ahref1." class=".$ahref."> 
                            <div class=".$productphoto.">
                                <img src=".$path." width=".$width." height=".$height."/>
                            </div>
                            <div class=".$padding.">
					            <font color=".$color_for_text."><font face=".$font_face_m."><font size=".$font_size.">$vendor $name</font></font></font>
                            </div>
                            <div class=".$padding.">
					            <font color=".$color_for_text."><font face=".$font_face_b."><font size=".$font_size_1.">$price</font><font face=".$font_face_l."> руб/10 шт.</font></font></font>
                            </div>
                        </a>
                    </li>";
            }
            mysqli_close($str);
            ?>
        </div>         
    </body>
</html>
