<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="html, css, php, git, bitrix">
    <link rel="stylesheet" href="css/style.css">
    <title>Задание 1.</title>
</head>
<body>
    <?php
        if ((empty($_GET['login'])) || (empty($_GET['mail']))){
            echo 'Не введен логин или почта';
        }
        else {
            if (strpos($_GET['login'], ' ') == true){
                echo 'Логин или почта не должны содержать пробелов';
            }
            else {
                if ((strlen($_GET['login']) < 3) || (filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL) == false)) {
                    echo 'логин меньше 3 символов или некоректно введен email.';
                } else {
                    $login = $_GET['login'];
                    $mail = $_GET['mail'];
                    $commit = $_GET['commit'];
                    $message = ' Логин - '.$login.', Коментарий - '.$commit.'; ';
                    mail($mail, 'Привет, ', $message);
                    echo 'Письмо отправленно';
                }
            }
        }
        ?>
        <div>
            <a href="index.php"><button name="back">Вернуться назад</button></a>
        </div>
</body>