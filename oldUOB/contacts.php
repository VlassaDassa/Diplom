<?php
include ("include/html.inc.php");
include ("config/config.inc.php");

$link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("��  ����  �����������  �  MySQL ��������");
mysql_select_db($db['base']) or die ("�� ���� ����������� � ����� ������.");

if ((isset($_POST['action']))&&($_POST['action']=="check"))
{ CheckForm(); }



HeadSight ("��������");

echo " <em></h1><center>��� ����� � ���������:</center></em>

<p><strong>���������� ����������� ������������� ������������ ������</p>
<p>171252,�������� �������, �. ��������, ��.�����������, �.13</p>
<p>����� ����������� �����: <a href=mailto:uob2004@yandex.ru>uob2004@yandex.ru</a></p>
<p>��� �� �������� ������� � ���� ����� ������ �� �������� ������� �. �����
�/� 40204810500000000041</p>
<p>��� 042809001 ��� 6911008573 ��� 691101001</p>
<p>��������� ������� ������ ���������</strong></p>
<table border=1 cellspacing=0 cellpadding=0 align=left>
    <tbody>
        <tr>
            <td width=40 valign=top>
                <p align=center>
                    <strong>�</strong>
                </p>
                <p align=center>
                    <strong>��</strong>
                </p>
            </td>
            <td width=200 valign=top>
                <p align=center>
                    <strong>�.�.�.</strong>
                </p>
            </td>
            <td width=350 valign=top>
                <p align=center>
                    <strong>���������</strong>
                </p>
            </td>
            <td width=120 valign=top>
                <p align=center>
                    <strong>������</strong>
                </p>
                <p align=center>
                    <strong>�������</strong>
                </p>
                </td>
            <td width=45 valign=top>
                <p align=center>
                    <strong>�����.</strong>
                </p>
                <p align=center>
                    <strong>�������</strong>
                </p>
                </td>
            <td width=45 valign=top>
                <p align=center>
                    <strong>���.</strong>
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
                    �������
                </p>
                <p>
                    ������ ���������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ��������� ���������� �����������
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
                    ���������
                </p>
                <p>
                    �������� ����������
                 </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ����������� ���������� ���������� �����������
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
                    ������
                </p>
                <p>
                    ������� �������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ����������� ���������� ���������� �����������
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
                    �������
                </p>
                <p>
                    ������ ����������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ���������� ������� �����������, ������ � ��������������� �����������
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
                    ������
                </p>
                <p>
                    ��������� �����������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ����������� ����������� ������� �����������, ������ � ��������������� �����������
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
                    �������
                </p>
                <p>
                    ����� ��������������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ������� ���������� �� ������������� ������ ������ �����������, ������ � ��������������� �����������
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
                    ��������
                </p>
                <p>
                    ����� ������������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ������� ���������� �� ������������� ������ ������ �����������, ������ � ��������������� �����������
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
                    ��������� 
                </p>
                <p>
                    ������� ����������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ������� ���������� �� ������������� ������ ������ �����������, ������ � ��������������� �����������
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
                    ���������
                </p>
                <p>
                    ������� �������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ���������� ������� ����������� � ��������������� ������
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
                    �������
                </p>
                <p>
                    ����� �������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                   ����������� ����������� ������� ����������� � ��������������� ������
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
                    ���������
                </p>
                <p>
                    ��������� ���������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ������� ���������� �� ������������� ������ ������ ����������� � ��������������� ������
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
                    ������������ 
                </p>
                <p>
                    ����� ����������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ����������� ����������� ������� �����������-������������ �����������
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
                    ��������
                </p>
                <p>
                    ����� �����������
                </p>
            </td>
            <td width=258 valign=top>
                <p>
                    ������� ���������� �� ������������� ������ 
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
<p> ����� ����������� �����: <a href=mailto:uob2004@yandex.ru>uob2004@yandex.ru</a></p>


<p>-------------------------------------------------------------------------------------------</p>
<p><center><h2>�������� �����</h2></center></p>
<p><em>� ����� �������� ����� �� ������ �������� ���� ������, ������� � �����������, ���������� ������ ���������� ����������� ������������ ������, ������� ����� ��� ���� ������ � ��������� �����������.</em></p></p>";
//�������� ^
echo "<br>";
ShowForm();

$query = mysql_query("SELECT * FROM guest ORDER BY guest.id DESC") or die ("������ ��������");
$num_rows = mysql_num_rows($query);
$page = $num_rows/10;
$page = ceil($page);
if ((isset($_GET['p']))&&(preg_match('/^[0-9]*$/' ,$_GET['p']))&&($page>=$_GET['p'])) { $p=$_GET['p']; } else { $p=0; }
$ot = $p*10;

$query = mysql_query("SELECT * FROM guest ORDER BY guest.id DESC LIMIT ".$ot.",10") or die ("������ ��������");
  while ($rezult = mysql_fetch_array($query))
  { 
  echo "<table width=95% border=0 cellspacing=0 cellpadding=0 class=guest align=center>";
  echo "<tr><td class=guest_name><b>&nbsp;&nbsp;".$rezult['name']."</b>&nbsp;&nbsp;&nbsp;&nbsp;";
  echo "".$rezult['time']."&nbsp;-&nbsp;".$rezult['date']."	<hr color=000000 size=1px width=250 align=left></td></tr>";
  echo "<tr><td class=guest_text>".$rezult['text']."</td></tr>";
  echo "</table><br>";
  }
  

echo "<table width=95% border=0 cellspacing=0 cellpadding=0 class=sight_news_title align=center>";
echo "<tr><td>��������:&nbsp;";
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
         <tr><td colspan=2 align=center class=guest_form_z>���������� ������.</td></tr>
         <tr><td width=150>���<b>*</b></td><td><input type="text" name="name"></td></tr>
         <tr><td>E-mail</td><td><input type="text" name="email"></td></tr>
         <tr><td valign=top>����� ���������<b>*</b></td><td><textarea name="text" cols="35" rows="5"></textarea></td></tr>
         <tr><td colspan=2 align=center><b>*</b> - ���� ������������ ��� ����������.</td></tr>
         <tr><td colspan=2 align=center><input type="submit" value="��������" ></td></tr>
        </table></form>';
 }

function CheckForm()
 {
  if (($_POST['name']=="")OR($_POST['text']=="")) {header ("Location: contacts.php"); exit;}
  if (!preg_match("/^[A-Z�-��-�a-z0-9_. -]+$/", $_POST['name'])) {header ("Location: contacts.php"); exit;}
  if (!preg_match("/^[A-Z�-��-�a-z0-9_. -]+$/", $_POST['text'])) {header ("Location: contacts.php"); exit;}
  if ($_POST['email']!=="") { if (!preg_match("/^[A-Za-z0-9_.-@]+$/", $_POST['email'])) {header ("Location: contacts.php"); exit;}}
  
  
  $query = mysql_query("INSERT INTO guest (name, email, date, time, text) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".date('d.m.Y')."', '".strftime('%H:%M')."', '".$_POST['text']."')");
  header ("Location: contacts.php");
 }

  
?>