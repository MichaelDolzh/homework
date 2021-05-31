<?php
//Заданние 1 . Создайте функцию, которая принимает одномерный массив
// и возвращает массив, заполненный случайными числами.
    function masrnd($mas){
        for ($i = 0; $i < count($mas); $i++){
            $mas[$i] = rand(0, 100);
        }
        return $mas;
    }
    $elem = rand(0, 20);
    $mas = new SplFixedArray($elem);
    print_r(masrnd($mas));

//Задание 2. Дана строка «HTML, CSS, PHP, BITRIX».
//Написать функцию, которая посчитает количество слов в строке.
    $str = 'HTML, CSS, PHP, BITRIX';
    function strcount($str){
        $pr = explode(', ', $str);
        $count = count($pr);
        return $count;
    }
    echo "<br>". strcount($str)."<br>";

//Задание 3.Дана строка «HTML, CSS, PHP, BITRIX».
//Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
    $str = 'HTML, CSS, PHP, BITRIX';
    function reversestr($str){
        $nstr = explode(', ', $str);
        for ($i = 0; $i <count($nstr); $i++){
            $nstr[$i] = strrev($nstr[$i]);
        }
        $nstr = array_reverse($nstr);
        $nstr = implode(', ', $nstr);
        return $nstr;
    }
    echo "<br>".reversestr($str)."<br>";

//Задание 4.Дана строка «HTML, CSS, PHP, BITRIX».
//Написать функцию, которая выведет на экран длину строки
    $str = 'HTML, CSS, PHP, BITRIX';
    function len($str){
        $lent = strlen($str);
        return $lent;
    }
    echo "<br>Длина строки = ".len($str)."<br>";

//Задание 5.Дана строка «HTML, CSS, PHP, BITRIX».
// Написать функцию, которая выведет каждую букву на новую строку
    $str = 'HTML, CSS, PHP, BITRIX';
    function cut($str){
        $elem = explode(', ', $str);
        foreach ($elem as $item){
            for ($i = 0; $i < strlen($item); $i++){
                echo substr($item, $i, 1).'<br>';
            }
        }
    }
    cut($str);