<?php
include ("include/html.inc.php");
include ("config/config.inc.php");

$link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("Не  могу  соединиться  с  MySQL сервером");
mysql_select_db($db['base']) or die ("Не могу соединиться с базой данных.");

if ((isset($_POST['action']))&&($_POST['action']=="check"))
{ CheckForm(); }



HeadSight ("Контакты");

echo " <em></h1><center>Наш адрес и реквизиты:</center></em>

<p><strong>Управление образования администрации Конаковского района</p>
<p>171252,Тверская область, г. Конаково, ул.Энергетиков, д.13</p>
<p>Адрес электронной почты: <a href=mailto:uob2004@yandex.ru>uob2004@yandex.ru</a></p>
<p>УФК по Тверской области В ГРКЦ Банка России по Тверской области г. Тверь
Р/с 40204810500000000041</p>
<p>БИК 042809001 ИНН 6911008573 КПП 691101001</p>
<p>Начальник Кожехов Михаил Сергеевич</strong></p>
<table border=1 cellspacing=0 cellpadding=0 align=left>
    <tbody>
        <tr>
            <td width=40 valign=top>
                <p align=center>
                    <strong>№</strong>
                </p>
                <p align=center>
                    <strong>пп</strong>
                </p>
            </td>
            <td width=200 valign=top>
                <p align=center>
                    <strong>Ф.И.О.</strong>
                </p>
            </td>
            <td width=350 valign=top>
                <p align=center>
                    <strong>Должность</strong>
                </p>
            </td>
            <td width=120 valign=top>
                <p align=center>
                    <strong>Прямой</strong>
                </p>
                <p align=center>
                    <strong>телефон</strong>
                </p>
                </td>
            <td width=45 valign=top>
                <p align=center>
                    <strong>Внутр.</strong>
                </p>
                <p align=center>
                    <strong>телефон</strong>
                </p>
                </td>
            <td width=45 valign=top>
                <p align=center>
                    <strong>Каб.</strong>
                </p>
            
            </td>
        </tr>
        <tr>
            <td width=45 valign=top>
                <p>
                    1.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Кожехов
                </p>
                <p>
                    Михаил Сергеевич
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    начальник управления образования
                </p>
            </td>
            <td width=41 valign=top>
                <p align=center>
                    4-97-96
                </p>
            </td>
            <td width=39 valign=top>
                <p align=center>
                    501
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    408
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    2.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Клюшанова
                </p>
                <p>
                    Светлана Викторовна
                 </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заместитель начальника управления образования
                </p>
             </td>
            <td width=41 valign=top>
                <p align=center>
                    4-97-95
                </p>
            </td>
            <td width=39 valign=top>
                <p align=center>
                    509
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    408
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    3.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Ферлей
                </p>
                <p>
                    Татьяна Юрьевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заместитель начальника управления образования
                </p>
             </td>
            <td width=41 valign=top>
                <p align=center>
                    4-97-95
                </p>
            </td>
            <td width=39 valign=top>
                <p align=center>
                    523
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    408
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    4.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Кулиева
                </p>
                <p>
                    Любовь Николаевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заведующий отделом дошкольного, общего и дополнительного образования
                </p>
             </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    524
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    402
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    5.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Гормаш
                </p>
                <p>
                    Екатерина Геннадьевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заместитель заведующего отделом дошкольного, общего и дополнительного образования
                </p>
             </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-99
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    510
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    406
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    6.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Брусова
                </p>
                <p>
                    Елена Константиновна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    главный специалист не муниципальной службы отдела дошкольного, общего и дополнительного образования
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-99
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    510
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    406
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    7.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Шарапова
                </p>
                <p>
                    Мария Владимировна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    главный специалист не муниципальной службы отдела дошкольного, общего и дополнительного образования
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    507
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    402
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    8.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Захмылова 
                </p>
                <p>
                    Татьяна Васильевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    главный специалист не муниципальной службы отдела дошкольного, общего и дополнительного образования
                </p>
           </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    505
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    402
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    9.
               
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Гурьянова
                </p>
                <p>
                    Людмила Юрьевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заведующий отделом мониторинга и организационной работы
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    506
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    404
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    10.
                  </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Иванова
                </p>
                <p>
                    Олеся Юрьевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                   заместитель заведующего отделом мониторинга и организационной работы
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    518
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    403
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p> 
 
                    11.
            </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Гучмазова
                </p>
                <p>
                    Маргарита Борисовна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    главный специалист не муниципальной службы отдела мониторинга и организационной работы
                </p>
            </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    519
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    403
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    
                    12.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Мирошниченко 
                </p>
                <p>
                    Ольга Алексеевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    заместитель заведующего отделом материально-технического обеспечения
                </p>
             </p>
             </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    521
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    427
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
                <p>
                    13.
                </p>
            </td>
            <td width=182 valign=top>
                <p>
                    Солонина
                </p>
                <p>
                    Ирина Анатольевна
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    главный специалист не муниципальной службы 
                </p>
            </p>
             </td>
            <td width=72 valign=top>
                <p align=center>
                    4-97-95
                </p>
             </td>
            <td width=39 valign=top>
                <p align=center>
                    500
                </p>
           </td>
            <td width=41 valign=top>
                <p align=center>
                    408
                </p>
            </td>
        </tr>
        <tr>
            <td width=33 valign=top>
              
                                
        </tr>
    </tbody>
</table>
<p>
</p>
<p> Адрес электронной почты: <a href=mailto:uob2004@yandex.ru>uob2004@yandex.ru</a></p>


<p>-------------------------------------------------------------------------------------------</p>
<p><center><h2>Гостевая книга</h2></center></p>
<p><em>В нашей гостевой книге вы можете оставить свои отзывы, вопросы и предложения, касающиеся работы Управления образования Конаковского района, данного сайта или свое мнение о проблемам образования.</em></p></p>";
//контакты ^
echo "<br>";
ShowForm();

$query = mysql_query("SELECT * FROM guest ORDER BY guest.id DESC") or die ("Запрос неудачен");
$num_rows = mysql_num_rows($query);
$page = $num_rows/10;
$page = ceil($page);
if ((isset($_GET['p']))&&(preg_match('/^[0-9]*$/' ,$_GET['p']))&&($page>=$_GET['p'])) { $p=$_GET['p']; } else { $p=0; }
$ot = $p*10;

$query = mysql_query("SELECT * FROM guest ORDER BY guest.id DESC LIMIT ".$ot.",10") or die ("Запрос неудачен");
  while ($rezult = mysql_fetch_array($query))
  { 
  echo "<table width=95% border=0 cellspacing=0 cellpadding=0 class=guest align=center>";
  echo "<tr><td class=guest_name><b>&nbsp;&nbsp;".$rezult['name']."</b>&nbsp;&nbsp;&nbsp;&nbsp;";
  echo "".$rezult['time']."&nbsp;-&nbsp;".$rezult['date']."	<hr color=000000 size=1px width=250 align=left></td></tr>";
  echo "<tr><td class=guest_text>".$rezult['text']."</td></tr>";
  echo "</table><br>";
  }
  

echo "<table width=95% border=0 cellspacing=0 cellpadding=0 class=sight_news_title align=center>";
echo "<tr><td>Страницы:&nbsp;";
for ($j=0; $j<$page; $j++)
{ if ($j==$p) { echo $j."&nbsp;"; } else {
echo '<a href="contacts.php?p='.$j.'" class=page>'.$j.'</a>&nbsp;'; }}
echo "</table><br><br>";  



RightSight ();

function ShowForm()
 {
  echo '
        <form action="contacts.php" method="post">
        <input type="hidden" name="action" value="check">
        <table width="95%" border="0" cellspacing="0" cellpadding="0" class=guest_form align=center	>
         <tr><td colspan=2 align=center class=guest_form_z>Добавление записи.</td></tr>
         <tr><td width=150>Имя<b>*</b></td><td><input type="text" name="name"></td></tr>
         <tr><td>E-mail</td><td><input type="text" name="email"></td></tr>
         <tr><td valign=top>Текст сообщения<b>*</b></td><td><textarea name="text" cols="35" rows="5"></textarea></td></tr>
         <tr><td colspan=2 align=center><b>*</b> - Поля обязательные для заполнения.</td></tr>
         <tr><td colspan=2 align=center><input type="submit" value="добавить" ></td></tr>
        </table></form>';
 }

function CheckForm()
 {
  if (($_POST['name']=="")OR($_POST['text']=="")) {header ("Location: contacts.php"); exit;}
  if (!preg_match("/^[A-ZА-Яа-яa-z0-9_. -]+$/", $_POST['name'])) {header ("Location: contacts.php"); exit;}
  if (!preg_match("/^[A-ZА-Яа-яa-z0-9_. -]+$/", $_POST['text'])) {header ("Location: contacts.php"); exit;}
  if ($_POST['email']!=="") { if (!preg_match("/^[A-Za-z0-9_.-@]+$/", $_POST['email'])) {header ("Location: contacts.php"); exit;}}
  
  
  $query = mysql_query("INSERT INTO guest (name, email, date, time, text) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".date('d.m.Y')."', '".strftime('%H:%M')."', '".$_POST['text']."')");
  header ("Location: contacts.php");
 }

  
?>