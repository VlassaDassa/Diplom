<?php
include ("include/html.inc.php");
include ("config/config.inc.php");
if ((isset($_GET['id']))&&(preg_match('/^[0-9]*$/' ,$_GET['id']))) { $p=$_GET['id']; } else { header ("Location: index.php"); }
$link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("��  ����  �����������  �  MySQL ��������");
mysql_select_db($db['base']) or die ("�� ���� ����������� � ����� ������.");
$query = mysql_query("SELECT * FROM news WHERE id = ".$p);
$rezult = mysql_fetch_array($query);
HeadSight ($rezult['name']);
echo "<br>&nbsp;&nbsp;&nbsp;".$rezult['text'];

RightSight ();
?>

<!-- Здесь почти нет html кода, потому что в БД хранятся/хранились целые html страницы, а не текст -->