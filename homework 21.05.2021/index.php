<?php
include_once 'db.php';

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'dz';
$conn = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
$login = $_POST['login'];
$pass = md5($_POST['pass']);
$select = mysqli_query($conn,"SELECT firstname, password FROM people WHERE firstname = '$login' AND password = '$pass'");
$count = mysqli_num_rows($select);
$select2 = mysqli_query($conn,"SELECT firstname, lastname, age FROM people WHERE firstname = '$login' AND password = '$pass'");
$arr = mysqli_fetch_all($select2);
if ((isset($_POST['login'])) || (isset($_POST['pass']))){
    if ((empty($_POST['login'])) && (empty($_POST['pass']))){
    }
    else{
        if ((strpos($_POST['login'], ' ') == true) || (strpos($_POST['pass'], ' ') == true)){
            $m1 = 'Логин или пароль не должны содержать пробелов.';
        }
        else {
            if ($count > 0){
                $select2 = mysqli_query($conn,"SELECT firstname, lastname, age FROM people WHERE firstname = '$login' AND password = '$pass'");
                $arr = mysqli_fetch_all($select2);
                session_start();
                $_SESSION['fname'] = $arr['0']['0'];
                $_SESSION['lname'] = $arr['0']['1'];
                $_SESSION['age'] = $arr['0']['2'];
                header('Location: authorization.php');
            }
            else{
                $m2 = 'Введены неверные данные.';
            }
        }
    }
}
function authorization($m1,$m2){
    echo $m1;
    echo $m2;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div>
    <div>Задание 1.</div>
    <form action="#" method="POST">
        <p>Введите свой логин и пароль, чтобы отправить их на сервер.</p>
        <p>Логин:</p>
        <div>
            <input type="text" name="login">
        </div>
        <p>Почта:</p>
        <div>
            <input type="text" name="pass" >
        </div>
        <p><?
            authorization($m1,$m2);
            ?>
        </p>
        <div>
            <button>Отправить</button>
        </div>
    </form>
</body>
</html>
