<?
session_start();
if (!empty($_SESSION['color']) && (empty($_GET['color']))){
    $color = $_SESSION['color'];
}
else{
    $_SESSION['color'] = $_GET['color'];
    $color = $_SESSION['color'];
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 3</title>
</head>
<body style="background-color: <?echo $color?>;">
    <div >Задание 3. Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет из списка. Если пользователе покинет сайт и заново войдет, нужно окрасить сайт в тот цвет, который был выбран последним.</div>
    <form action="" method="GET">
        <p>Выберите цвет:</p>
        <select name="color">
            <option value="green">GREEN</option>
            <option value="red">RED</option>
            <option value="blue">BLUE</option>
            <option value="yellow">YELLOW</option>
        </select>
        <div>
            <button >Выбрать цвет</button>
        </div>
    </form>
    <div>
        <a href="index.php"><button>Вернуться назад</button></a>
    </div>
</body>
</html>