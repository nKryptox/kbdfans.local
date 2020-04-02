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
        <?php
	        include('config.php');
 	        $registrationSuccess = true;
            $registrationUserErrors = [];
            $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
   		    if ($mysqli->connect_errno) {
  		        $registrationSuccess = false;
  		        die("Ошибка подключения к базе данных: " . $mysqli->connect_errno . " " . $mysqli->connect_error);
            } else {
                $name = $_POST['name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $date_born = $_POST['date_BORN'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                $verificationPassword = $_POST['password1'];
                $uploadDir = 'E:/OSPanel/domains/kbd.local/users_photo/';
                $uploaddir = 'users_photo/';
                $uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
                if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
                    $registrationSuccess = false;
                    $registrationUserErrors[] = '<h1><p align="center"><font size="15">Вы не загрузили аватар</font></font></p></h1>';
                }
                if ($password !== $verificationPassword) {
                    $registrationSuccess = false;
                    $registrationUserErrors[] = '<h1><p align="center"><font size="15">Введёные пароли не совпадают!</font></font></p></h1>';
                }
                if (2 > strlen($name) || strlen($name) > 32) {
                    $registrationSuccess = false;
                    $registrationUserErrors[] = '<h1><p align="center"><font size="15">Длина имени должна быть от 2 до 32 симбволов</font></font></p></h1>';
                }
                if (6 > strlen($login) || strlen($login) > 32) {
                    $registrationSuccess = false;
                    $registrationUserErrors[] = '<h1><p align="center"><font size="15">Длина логина должна быть от 6 до 32 симбволов</font></font></p></h1>';
                }
                if (6 > strlen($password) || strlen($password) > 20) {
                    $registrationSuccess = false;
                    $registrationUserErrors[] = '<h1><p align="center"><font size="15">Длина пароля должна быть от 6 до 20 симбволов</font></font></p></h1>';
                }
                $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
                if (!$loginSelect = $mysqli->query($loginQuery)) {
                    $registrationSuccess = false;
                    die('Ошибка запроса: '. $mysqli->error);
                } else {
                    if ($loginSelect->num_rows) {
                        $registrationSuccess = false;
                        $registrationUserErrors[] = '<h1><p align="center"><font size="15">Введёный логин уже существует!</font></font></p></h1>';
                    }
                }
                $hashPassword = hash('md5', $password);
                if ($registrationSuccess) {
                    $query = "INSERT INTO `users`(`name`, `middle name`, `last name`, `login`, `email`, `phone number`, `date born`, `password`, `path`) VALUES ('$name','$middle_name','$last_name','$login','$email','$phone_number','$date_born','$hashPassword','$uploadfile')";
                    if (!$mysqli->query($query)) {
                        die('Ошибка запроса: '. $mysqli->error);
                    }
                } else {
                    foreach ($registrationUserErrors as $error) {
                        ?>
                            <div style="color: red;">
                                <?php
                                    echo($error . '<br>');
                                ?>
                            </div>
                        <?php
                    }
                ?>
                <?php
                    }
                if ($registrationSuccess) {
                     ?>
                         <h1><p align="center"><font color="#E5B37E"><font size="15">Вы успешно зарегистрировались!</font></font></p></h1><br>
                        <p align="center"><font color="#E5B37E"><font size="15"><a href="index.php">Перейти на главную.</a></font></font></p></h1>
                    <?php
                    echo $name . "<br>";
                    echo $middle_name . "<br>";
                    echo $last_name . "<br>";
                    echo $login . "<br>";
                    echo $email . "<br>";
                    echo $phone_number . "<br>";
                    echo $date_born . "<br>";
                    echo $password . "<br>";
                    echo $uploadfile . "<br>";
                }
            }
            $mysqli->close();
        ?>
    </body>
</html>