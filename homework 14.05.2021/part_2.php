<?
if ((!empty($_POST['login'])) && (!empty($_POST['pass']))){
    if ((strpos($_POST['login'], ' ') == true) || (strpos($_POST['pass'], ' ') == true)){
        $m2 = 'Логин или пароль не должны содержать пробелов.';
    }
    else {
        if ((strlen($_POST['login']) < 4) || (strlen($_POST['pass']) < 6)){
            $m3 = 'Логин не может быть меньше 4 символов. Пароль не может быть меньше 6 символов';
        }
        else{
            if ($_POST['site'] == 'bitrix.php'){
                header ('Location: bitrix.php');
            } else {
                header ('Location: fact.php');
            }
        }
    }
}
function authorization($m1,$m2,$m3){
    echo $m1;
    echo $m2;
    echo $m3;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="html, css, php, git, bitrix">
    <title>Задание 2</title>
</head>
<body>

    <div>Задание 2. К задаче с авторизацией добавить две страницы (fact.php, bitrix.php). Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php). После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней.</div>
    <form action="" method="POST">
        <p>Введите свой логин и пароль, чтобы отправить их на сервер.</p>
        <p>Логин:</p>
        <div>
            <input type="text" name="login">
        </div>
        <p>Почта:</p>
        <div>
            <input type="text" name="pass" >
        </div>
        <p><?authorization($m1,$m2,$m3); echo $site;?></p>
        <p>Выбирите на какой странице авторизоваться:</p>
        <span>Bitrix.php</span><input type="radio" name="site" value="bitrix.php" checked>
        <span>fact.php</span><input  type="radio" name="site" value="fact.php">
        <p><?
            if (!empty($_COOKIE['site'])){
                echo 'Вы только что были на странице ' . "<span>" . $_COOKIE['site'] ." </span>";
            }
            ?>
        </p>
        <div>
            <button value="1">Отправить</button>
        </div>
    </form>
    <div>
        <a href="index.php"><button>Вернуться назад</button></a>
    </div>
</body>
</html>