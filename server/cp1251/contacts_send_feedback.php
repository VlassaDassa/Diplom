<?php
    include ("include/html.inc.php");
    include ("config/config.inc.php");
    
    $link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("���-�� ����� �� ���...");
    mysql_select_db($db['base']) or die ("���-�� ����� �� ���...");

    $query = mysql_query("INSERT INTO guestMessages (name, email, date, time, text) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".date('d.m.Y')."', '".strftime('%H:%M')."', '".$_POST['text']."')");
?>
