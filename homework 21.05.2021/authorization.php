<?php
session_start();
echo 'Здравствуйте, '.$_SESSION['fname'].' '.$_SESSION['lname'].' ваш возраст - '. $_SESSION['age'];