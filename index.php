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
        </header>   
        <div class="padding_logo">
            <div class="flex_logo">
                <div id="div1"><p align="center"><img src="images/logo.png" alt=""></p></div>
            </div>
        </div>
        <div class="padding_preview">
            <p align="center"><font color="#E5B37E"><font size="25%">Нам поставляют переключатели от производителей как:</p></font></font></font></font></font></font></font></font></font>
        </div>
        <div class="padding_preview">
            <div class="flex_index_products">
                <div class="padding5">
                    <img src="shop/kailh_box_R.jpg" width="250px" height="250px" alt="">
                    <p align="center"><font color="#E5B37E"><font size="7%">Kailh</font></font></font></p>
                </div>
                <div class="padding5">
                    <img src="shop/Zealios.jpg" width="250px" height="250px" alt="">
                    <p align="center"><font color="#E5B37E"><font size="7%">ZealPC</font></font></font></p>
                </div>
                <div class="padding5">
                    <img src="shop/Holy_Pandas.jpg" width="250px" height="250px" alt="">
                    <p align="center"><font color="#E5B37E"><font size="7%">Holy Pandas</font></font></font></p>
                </div>
            </div>
        </div>
        <div class="padding_preview">
            <p align="center"><font color="#E5B37E"><font size="25%">С нами сотрудничают:</p></font></font></font>
        </div>
        <div class="padding_preview">
            <div class="flex_index_products">
                <div class="padding5">
                    <img src="images/kprepubic.png" height="50px" alt="">
                </div>
                <div class="padding5">
                    <img src="images/novelkeys.png" height="50px" alt="">
                </div>
                <p align="center"><font color="#E5B37E"><font size="6%">
                C <font color="#E5B37E"><font size="6%">  KPRepublic </font></font></font>
                <font color="#E5B37E"><font size="6%"> к нам поставляют корпуса, платы и кабеля для клавиатур.<br>
                А с <font color="#E5B37E"><font size="6%"> NovelKeys </font></font></font>
                <font color="#E5B37E"><font size="6%">нам завозят переключатели, стабилизаторы и кейкапы.</font><br>
                <font size="6%">В скором времени появятся в продаже коврики от <font color="#E5B37E"><font size="6%">Varmilo</font></font></font><font size="6%"> и 
                <font color="#E5B37E"><font size="6%">Cherry.</font></font></font>
            </div>
        </div>
    </body>
</html>