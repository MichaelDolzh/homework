<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание 12.05.21</title>
</head>
<body>
<div>
    <div>Задание 1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес</div>
    <form action="mail.php" method="GET">
        <p>Логин:</p>
        <input type="text" name="login" >
        <p>Почта:</p>
        <input type="text" name="mail" >
        <p>Комментарии:</p>
        <textarea name="commit"></textarea>
        <button>Отправить</button>
    </form>
</div>

<div>Задание 2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.</div>
<form action="authorization.php" method="POST">
    <p>Логин:</p>
    <input type="text" name="login" >
    <?

    ?>
    <p>Пароль:</p>
    <input type="text" name="password" >
    <div>
        <button>Авторизоваться</button>
    </div>
</form>

<div>Задание 3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».</div>
<div>
    <form action="question.php" method="GET">
        <div >
            <p>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_1" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_1" value="1">
                </div>
            </div>
            <p>2. Раздражают ли Вас мелкие повседневные обязанности?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_2" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_2" value="1">
                </div>
            </div>
            <p>3. Верите ли Вы, что ваши друзья преданы Вам?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_3" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_3" value="0">
                </div>
            </div>
            <p>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_4" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_4" value="1">
                </div>
            </div>
            <p>5. Способны ли Вы ударить собаку или кошку?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_5" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_5" value="1">
                </div>
            </div>
            <p>6. Часто ли Вы принимаете лекарства?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_6" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_6" value="1">
                </div>
            </div>
            <p>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_7" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_7" value="1">
                </div>
            </div>
            <p>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_8" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_8" value="1">
                </div>
            </div>
            <p>9. Тяготят ли Вас общественные обязанности?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_9" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_9" value="0">
                </div>
            </div>
            <p>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_10" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_10" value="0">
                </div>
            </div>
            <p>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_11" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_11" value="1">
                </div>
            </div>
            <p>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_12" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_12" value="1">
                </div>
            </div>
            <p>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_13" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_13" value="0">
                </div>
            </div>
            <p>14. Нравится ли Вам семейная жизнь?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_14" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_14" value="0">
                </div>
            </div>
            <p>15. Злопамятны ли Вы?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_15" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_15" value="1">
                </div>
            </div>
            <p>16. Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_16" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_16" value="1">
                </div>
            </div>
            <p>17. Случается ли Вам с утра быть в плохом настроении?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_17" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_17" value="1">
                </div>
            </div>
            <p>18. Раздражает ли Вас современная живопись?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_18" value="0" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_18" value="1">
                </div>
            </div>
            <p>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
            <div>
                <div >
                    <span>Да</span>
                    <input type="radio" name="question_19" value="1" checked>
                </div>
                <div >
                    <span>Нет</span>
                    <input type="radio" name="question_19" value="0">
                </div>
                <div>
                    <button class="button">Узнать результат</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>

