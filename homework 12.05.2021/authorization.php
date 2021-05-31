<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 2.</title>
</head>
<body>
        <?php
        if ((empty($_POST['login'])) && (empty($_POST['password']))) {
            echo 'Вы не ввели логин или пароль.';
        }
        else {
            if ((strpos($_POST['login'], ' ') == true) || (strpos($_POST['password'], ' ') == true)){
                echo 'Логин или пароль не должны содержать пробелов.';
            }
            else {
                if ((strlen($_POST['login']) < 3) || (strlen($_POST['password']) < 5)){
                    echo 'Логин не может быть меньше 3 символов. Пароль не может быть меньше 5 символов';
                } else {
                    $login = $_POST['login'];
                    $password = md5($_POST['password']);
                    file_put_contents('authorization.txt', 'Логин - '.$login.', Пароль - '.$password.'; ', FILE_APPEND);
                    echo 'Логин: '.$_POST['login'].' был успешно принят.'.'<br>';
                    echo 'Пароль: '.$_POST['password'].' был успешно принят/отправлен и зашифрован с помощью MD5: '.$password.'<br>';

                }
            }
        }
        ?>
        <div>
            <a href="index.php"><button name="back">Вернуться назад</button></a>
        </div>
</body>