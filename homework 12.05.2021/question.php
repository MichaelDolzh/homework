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
        for ($i = 1; count($_GET) + 1 > $i; $i++){
            $sum += $_GET['question_'.$i];
        }
        echo 'Оценочный балл: '.$sum.'<br>';
        if ($sum > 15) {
            echo 'У Вас покладистый характер';
        } else{
            if (($sum >= 8) && ($sum <= 15)){
                echo 'Вы не лишены недостатков, но с вами можно ладить';
            } else{
                if ($sum < 8){
                    echo 'Вашим друзьям можно посочувствовать';
                }
            }
        }
        ?>
        <div>
            <a href="index.php"><button name="back">Вернуться назад</button></a>
        </div>
</body>