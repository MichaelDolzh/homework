<?
$login = $_POST['login'];
$pass = $_POST['pass'];
if ((isset($_POST['login'])) || (isset($_POST['pass']))){
    if ((empty($_POST['login'])) && (empty($_POST['pass']))){
    }
    else{
        if ((strpos($_POST['login'], ' ') == true) || (strpos($_POST['pass'], ' ') == true)){
            $m1 = 'Логин или пароль не должны содержать пробелов.';
        }
        else {
            if ((strlen($_POST['login']) < 4) || (strlen($_POST['pass']) < 6)){
                $m2 = 'Логин не может быть меньше 4 символов. Пароль не может быть меньше 6 символов';
            }
            else{
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['pass'] = $pass;
                $m3 = 'На сервер были переданны Логин: '.$login . ' и Пароль: ' . $pass .'<br>';
            }
        }
    }
}
function authorization($m1,$m2,$m3){
    echo $m1;
    echo $m2;
    echo $m3;
    if (!empty($m3)){
        print_r($_SESSION);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="html, css, php, git, bitrix">
    <title>Задание 1</title>
</head>
<body>
    <div>Задание 1. Удалить сессию при помощи специальной функции</div>
    <form action="" method="POST">
        <p>Введите свой логин и пароль, чтобы отправить их на сервер.</p>
        <div>
            <p>Логин:</p>
            <div>
                <input type="text" name="login">
            </div>
        </div>
        <div>
            <p>Почта:</p>
            <div>
                <input type="text" name="pass" >
            </div>
        </div>
        <p>
            <?
            authorization($m1,$m2,$m3);
            if (!empty($_POST['clean'])){
                session_unset();
                print_r($_SESSION);
                echo $m1 = 'Сессия успешно удалена';
            }
            ?>
        </p>
        <div>
            <button>Отправить</button>
        </div>
        <div>
            <button name="clean" value="1">Очистить Сессию</button>
        </div>
    </form>
    <div>
        <a href="index.php"><button class="button">Вернуться назад</button></a>
    </div>
</body>
</html>