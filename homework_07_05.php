<?php
    $str= "abc abc abc";
    //Задание 1
    function strvalue($content){
        if(strlen($content)>5){
            $content.="...";
            echo "<br>$content <br>";
        }
        else{
            echo "<br>$content <br>";
        }
    }
    //Задание 2
    function strrepl($content){
        $content= str_replace("a","1",$content);
        $content= str_replace("b","2",$content);
        $content= str_replace("c","3",$content);
        echo "<br>$content <br>";
    }
    strvalue($str);
    strrepl($str);
    //Задание 3
    echo strrpos($str, 'c')."<br>";
    //Задание 4
    $str = 'html css php';
    echo substr($str, 0, 4)."<br>";
    echo substr($str, 5, 3)."<br>";
    echo substr($str, 9, 3)."<br>";

    //Задание 5
    $now = time();
    $my_date = strtotime("2019-01-01");
    $datediff = $now - $my_date;
    echo floor($datediff / (60 * 60 * 24))."<br>";

