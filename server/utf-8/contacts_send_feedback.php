<?php
    include ("include/html.inc.php");
    include ("config/config.inc.php");

    $link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("Что-то пошло не так...");
    mysql_select_db($db['base']) or die ("Что-то пошло не так...");

    function convertToWindows1251($string) {
        return iconv('UTF-8', 'windows-1251', $string);
    }
    
    $name = convertToWindows1251($_POST['name']);
    $email = convertToWindows1251($_POST['email']);
    $text = convertToWindows1251($_POST['text']);

    $query = mysql_query("INSERT INTO guestMessages (name, email, date, time, text) VALUES ('$name', '$email', '".date('d.m.Y')."', '".strftime('%H:%M')."', '$text')");
?>
