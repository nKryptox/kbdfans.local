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
		<div class="padding1">
			<div class="flex">
				<div class="shape_login">
        			<?php
    					if (isset($_POST['login']) && isset($_POST['password'])) {
        					include('config.php');
       		 				$login = $_POST['login'];
    	    				$password = $_POST['password'];
    	    				$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
    	    				$authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        					if (!$result = $mysqli->query($authQuery)) {
            					die('Ошибка запроса: '. $mysqli->error);
        					}
        					if (!$result->num_rows) {
            				echo('<p align="center"><font color="red">Неверный логин или пароль!</font></p>');
        					} else {
            					$user = $result->fetch_assoc();
           						if ($user['password'] !== hash('md5', $password)) {
                					echo('<p align="center"><font color="red">Неверный логин или пароль!</font></p>');
            					} else {
                					$_SESSION['user'] = $user;
            					}
        					}
    					}
    					if (isset($_SESSION['user'])) {
							exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
    					} else {
						?>
        	    		<h1><p align="center"><font color="#E5B37E"><font size="15">Вход:</p></h1>
        	    		<form action="" method="post">
						<p align="center"><b><font color="#E5B37E"><font size="5.5">Логин:</font></font></font></b><br>
        	        		<input type="text" name="login">
        	    		</p>
        	    		<p align="center"><b><font color="#E5B37E"><font size="5.5">Пароль:</font></font></font></b><br>
        	    			    <input type="password" name="password">
        	    		</p>
        	    		<p align="center"><font color="#E5B37E"><font size="5.5">
        	    		    <input class="knopka" type="submit" value="Войти"/><br>
							<a href="Registration.php">Зарегистрироватся</a>
						</p></font></font></font></font>
						<?php
						}
						?>
					</form>
				</div>
            </div>
        </div>
    </body>
</html>
