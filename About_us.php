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
        </header>   </font></font></font></font>
        <div class="padding_preview">
            <div class="flex_index_products">
                <ul>
                    <li>
                        <p align="center"><font size="8"><font color="#E5B37E">И так, почему мы открылись?</font></font></font></font></p>
			            <p align="center"><font color="#b28861"><font size="5">Первая причина - это отсутствие многих хороших клавиатур
			            <br>в Ульяновске. А сделать кастомную клавиатуру под заказ
			            <br>уж тем-более не представляется возможным. </font></font></font></font></p>
			            <p align="center"><font color="#b28861"><font size="5">Вторая причина - большие цены на единичные,
			            <br>просто нормальных клавиатур. Те же кастомные клавиатуры
			            <br>не собирают в Ульяновске под заказ. </font></font></font></font></p>
			            <p align="center"><font color="#b28861"><font size="5">
                    </li>
                </ul>
            </div>
        </div>
        <div class="padding_preview">
            <div class="flex_index_products">
                <ul>
                    <li>
                        <p align="center"><font size="8"><font color="#E5B37E">О нас.</font></font></font></font></p>
                        <p align="center"><font color="#b28861"><font size="5">
                        Данный сайт предназначет для покупки необходимых деталей для <br>
                        сборки кастома и имеются услуги по самой сборке.<br>
                        Доставка идет курьером  СДЭК за 10$. Она занимает не больше недели,<br> 
                        по этому поводу вам беспокоиться нечего).<br>
                        В скором времени мы будем продовать энкодеры, микрики и прочий стаф для мышек.<br>
                    </li>
                </ul>
            </div>
        </div>
        <div class="padding_preview">
            <div class="flex_index_products">
                <ul>
                    <li>
                        <p align="center"><font color="#E5B37E"><font size="8">Коротко о том, где мы находимся...</font></font></font><br>
                        <p align="center"><font color="#b28861"><font size="5">
                        И так, у нас есть дискорд сервер, где есть люди, которые могут помочь вам в этой сфере.<br>
                        А личка в вк предназначена для вопросов, которые известны только администратору, <br>
                        а так же для жалоб на нарушителя в дс сервере :).</font></font></font></p></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="padding_preview">
            <div class="society">
                <div class="flexa">
                        <div id="div1"><img src="images/discord.png" width="200px" height="200px" alt=""></div>
                        <div class="margin_aboutus">
                            <div id="div2"><font color="#E5B37E"><font size="6%">Дискорд сервер</font></font></font><br>
                                <font color="#696468"><font size="5%"><a href="https://discord.gg/RaKCfA">Перейти на сервер</a></font></font></font>
                        </div>
                    </div>
                </div>
                <br>
                <div class="flexa">
                    <div id="div1"><img src="images/vk.png" width="200px" height="200px" alt=""></div>
                    <div class="margin_aboutus">
                        <div id="div2"><font color="#E5B37E"><font size="6%">Администратор во Вконтакте</font></font><br>
                    <font color="#696468"><font size="5%"><a href="https://vk.com/sagievadel">Перейти на страницу администратора</a></font></font>
                </div>
            </div>
        </div>
    </body>
</html>