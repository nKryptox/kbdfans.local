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
                <li><a href="login.php">Вход</a></li>
            </ul>
        </header>   
		</font></font>
		<div class="padding_profile">
			<div class="flex">
            	<div class="shape_signup">
                    <h1><p align="center"><font color="#E5B37E"><font size="15">Регистрация:</font></font></font></p></h1>
                    	<form enctype="multipart/form-data" action="reg_con.php" method="post">
                    	<p align="center"><b><font color="#E5B37E"><font size="5.5">Имя:</font></font></font></b><br>
                    	    <input type="text" name="name">
                    	</p>
						<p align="center"><b><font color="#E5B37E"><font size="5.5">Фамилия:</font></font></font></b><br>
                    	    <input type="text" name="middle_name">
                    	</p>
						<p align="center"><b><font color="#E5B37E"><font size="5.5">Отчество:</font></font></font></b><br>
                    	    <input type="text" name="last_name">
                    	</p>
						<p align="center"><b><font color="#E5B37E"><font size="5.5">Номер телефона:</font></font></font></b><br>
                    	    <input type="text" name="phone_number">
                    	</p>
						<p align="center"><b><font color="#E5B37E"><font size="5.5">Дата рождения:</font></font></font></b><br>
                    	    <input type="date" name="date_BORN">
                    	</p>
						<p align="center"><b><font color="#E5B37E"><font size="5.5">E-mail:</font></font></font></b><br>
                    	    <input type="text" name="email">
                    	</p>
			        	<p align="center"><b><font color="#E5B37E"><font size="5.5">Логин:</font></font></font></b><br>
                        	<input type="text" name="login">
                    	</p>
                    	<p align="center"><b><font color="#E5B37E"><font size="5.5">Пароль:</font></font></font></b><br>
                    	    <input type="password" name="password">
                   		</p>
			        	<p align="center"><b><font color="#E5B37E"><font size="5.5">Проверка пароля:</font></font></font></b><br>
                    	    <input type="password" name="password1">
                    	</p>
                   		<p align="center"><b><font color="#E5B37E"><font size="5.5">Загрузка аватара:</font></font></font></b><br>
						   <input type="file" name="avatar" method="POST"><br>
						</p>
						<p align="center"><font color="#E5B37E"><font size="5.5">
        	    		    <input class="knopka" type="submit" value="Зарегистрироваться"/>
						</p></font></font></font></font>
					</form>
				</div>
            </div>
        </div>
    </body>
</html>
