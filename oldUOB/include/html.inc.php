<!--
-->
</style>

<div align="justify"></div>
<?php
function HeadSight ($PageName) // шапка сайта, навигация
 {
  echo '
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>'.$PageName.'</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js">
</script>
<script type="text/javascript" src="script.js"></script>
  </head>
  <body>';
  echo '
   <div class="glav"><div style="margin-left:90px;"><img src=img/gerb.gif  height=150 width=790></div><br>'; //шапка сайта
  echo '
<div class="container">
   <div class="leftbox">
   <div id="celebs">
<div class="zag" align="center">Меню</div>
    <ul id="accordion">
      <li><a href="oldIndex.php">Главная</a></li>
<li><a>Муниципальные механизмы управления качеством образования</a>
   <ul>

<li><a>I. Механизмы управления качеством образовательных результатов</a>
   <ul>
      <li><a href="1.1.systemocenkikach.php">1.1.Система оценки качества подготовки обучающихся</a></li>
      <li><a href="1.2.systemrabsoschool.php">1.2.Система работы со школами с низкими результатами обучения и/или школами, функционирующими в неблагоприятных социальных условиях</a></li>
      <li><a href="1.3.talant.php">1.3.Система выявления, поддержки и развития способностей и талантов у детей и молодежи</a></li>
         
               <li> Трек 1.Развитие способностей обучающихся в соответствии с их потребностями(Неполный цикл)</a>
<ul>
          <li><a href="1.1.1.mers.php">1.1.1. Меры, мероприятия</a></li>
       <li><a href="1.1.2.ypravreshen.php">1.1.2. Управленческие решения</a></li>
       <li><a href="1.1.3.analiz.php">1.1.3. Анализ эффективности принятых мер</a></li>
   </ul>
<li><a href="1.4.systemrabpoproforient.php">1.4. Система работы по самоопределению и профессиональной ориентации обучающихся</a></li>
</ul>
        </li>
               
       </li>

<li><a>II. Механизмы управления качеством образовательной деятельности</a>
   <ul>
      <li><a href="2.1.systemmonitrykOO.php">2.1. Система мониторинга эффективности руководителей образовательных организаций</a></li>
      <li><a href="2.2.systemprofrazped.php">2.2. Система обеспечения профессионального развития педагогических работников</a></li>
      <li><a href="2.3.systemorganvospit.php">2.3. Система организации воспитания и социализации обучающихся</a></li>
         
               <li>Трек 1. Формирование ценностных ориентаций обучающихся (Полный цикл)</a>
<ul>
          <li><a href="1.3.1.celi.php">1.3.1. Цели</a></li>
       <li><a href="1.3.2.pokazat.php">1.3.2. Показатели</a></li>
       <li><a href="1.3.3.metodsborinform.php">1.3.3. Методы сбора и обработки информации</a></li>
	<li><a href="1.3.4.monitpokaz.php">1.3.4. Мониторинг показателей</a></li>
	<li><a href="1.3.5.analizrezmonit.php">1.3.5. Анализ результатов мониторинга</a></li>
	<li><a href="1.3.6.adresrekomporezanaliz.php">1.3.6. Адресные рекомендации по результатам анализа</a></li>
	<li><a href="1.3.7.meropri.php">1.3.7. Меры, мероприятия</a></li>
	<li><a href="1.3.8.reshen.php">1.3.8. Управленческие решения</a></li>
	<li><a href="1.3.9.analizeffektiv.php">1.3.9. Анализ эффективности принятых мер</a></li>
   </ul>
<li><a>2.4.Система мониторинга качества дошкольного образования</a>
<ul>
<li><a href="2.4.1.poviskachOPDO.php">2.4.1. Повышение качества ОП ДО</a></li>
<li><a href="2.4.2.Profrazped.php">2.4.2. Профессиональное развитие педагогов</a></li>
<li><a href="2.4.3.Povkachobrysl.php">2.4.3. Повышение качества образовательных услуг</a></li>
<li><a href="2.4.4.PovkachDOOVZ.php">2.4.4. Повышение качества ДО для ОВЗ</a></li>
<li><a href="2.4.5.PazvitmexyprkachDO.php">2.4.5. Развитие механизмов управления качеством ДО</a></li>

</ul>
</li>
</ul>
</ul>

        </li>
</li>

      <li><a href="korona.php">Профилактика коронавирусной инфекции</a> </li>
      <li><a href="sockontr.php">Социальная поддержка на основание социального контракта</a></li>
      <li>Мероприятия
       <ul>
        <li><a href="Bezopasnost terror.php">Противодействия идеологии терроризма и экстремизма</a></li>
        <li><a href="Sport.php">Спорт</a></li>
        <li><a href="zdorove.php">Здоровье</a></li>
        </ul>
      </li>
      <li>Документы
       <ul>
        <li><a href="normdoc.php">Нормативные документы</a></li>
        <li><a href="publ.php">Публикации</a></li>
        <li><a href="npa.php">НПА ДО</a></li>
              </ul>
      </li>
      <li>Деятельность
       <ul>
        <li><a href="RDDM.php">РДДМ "Движение Первых"</a></li>
        <li><a href="pedagog.php">Год педагога и наставника</a></li>
        <li><a href="attest.php">Аттестация педагогов</a></li>
        <li><a href="vakansii.php">Вакансии</a></li>
        <li><a href="antikorup.php">Антикоррупционная деятельность</a></li>
        <li><a href="vmk.php">Виртуальный методический кабинет</a></li>
        <li><a href="metodich rabota.php">Методическая работа</a></li>
        <li><a href="olymp.php">Всероссийская олимпиада школьников по предметам Муниципальный этап</a></li>
        <li><a href="vpr.php">Всероссийские проверочные работы</a></li>
        <li><a href="fgosovz.php">Обучение детей с ОВЗ и детей-инвалидов</a></li>
         <li><a href="fungram.php">Функциональная грамотность</a></li>
         <li><a href="DostizDO.php">Достижения учреждений дополнительного образования</a></li>
      </ul>
      </li>
     <li><a href="Duhovnost.php">Стратегия духовно-нравственного воспитания детей</a>
      </li>  
<li>Мониторинг системы образования
       <ul>
        <li><a href="novoe 1.php">Положение о мониторинге и его планирование</a></li>
        <li><a href="novoe 2.php">Отчет и показатели системы образования</a></li>
        <li><a href="novoe 3.php">Статистическая отчетность</a></li>
        <li><a href="novoe 4.php"> Результаты мониторинга</a></li>
       </ul>
      </li>
       <li>Информация для родителей
       <ul>
        <li><a href="DOU.php">Дошкольное образование</a></li>
        <li><a href="SOSH.php">Общее образование</a></li>
        <li><a href="pitanie.php">Питание</a></li>
        <li><a href="OVZ.php">ОВЗ</a></li>
        <li><a href="DO.php">Дополнительное образование</a></li>
        <li><a href="konsultant.php">Консультационные центры</a></li>
        <li><a href="soch.php">Итоговое сочинение (изложение) </a></li>
        <li><a href="gia9.php">Государственная итоговая аттестация 9 классов </a></li>
        <li><a href="gia11.php">Государственная итоговая аттестация 11 классов </a></li>
        <li><a href="LETO.php">Летний отдых</a></li>
        <li><a href="Proforientaciya.php">Профориентация</a></li>
        </ul>
      </li>
      <li><a href="vospitanie.php">Воспитание</a>
      </li>
       <li>Безопасность
       <ul>
        <li><a href="Dorognaya bezopasnost.php">Дорожная безопасность</a></li>
        <li><a href="Pogarnaya bezopasnost.php">Пожарная безопасность</a></li>
        <li><a href="INF BEZOPASNOCT.php">Информационная безопасность</a></li>
        <li><a href="BEZOPASNOST.php">Комплексная безопасность</a></li>
        <li><a href="Finansovaya gramotnost.php">Финансовая грамотность</a></li>
       </ul>
      </li>
      <li><a href="publichnyy doklad.php">Публичный доклад</a>
      </li>
      <li><a href="pupul sayta bus.gov.ru.php">Популяризация сайта bus.gov.ru</a>
      </li>
      <li><a href="Nezavisimaya otchenka.php">Независимая оценка</a>
      </li>
      <li> Профсоюз
      <ul>
        <li><a href="profsouz.php">Конаковский районный профсоюз образования</a></li>
        <li><a href="profsouzUO.php">Первичная профсоюзная организация управления образования администрации Конаковского района</a></li>
      </ul>
      </li>
      <li><a href="PMPK.php">Психолого-медико-педагогическая комиссия Конаковского района</a>
      </li>
      <li>О нас
       <ul>
        <li><a href="articles.php">Начальники отделов</a></li>
        <li><a href="SMI o nas.php">СМИ о нас</a></li>
       </ul>
      </li>
      <li>Ссылки на сайт. Очередь в дошкольные учреждения
       <ul>
        <li><a href="selka.php">Полезные ссылки</a></li>
        <li><a href="shcool.php">Общеобразовательные учреждения и учреждения дополнительного образования детей</a></li>
        <li><a href="sadi.php">Дошкольные образовательные учреждения</a></li>
        <li><a href="ohered.php">Очередь в дошкольных учреждениях</a></li>
        <li><a href="bus.gov.php">BUS.GOV.RU ОФИЦИАЛЬНЫЙ САЙТ  для размещения информации о государственных (муниципальных) учреждениях</a></li>
       </ul>
 </li>
      <li><a href="oldContacts.php">Контакты</a></li>
 <li><a href="vakansii.php">Вакансии</a></li>
<li><a href="moderniz.php">Модернизация школьных систем образования</a></li>
    </ul>

   <img src="img/010.PNG">
<p></p>
   <img src="doc/yarlyki/2 (5).jpg">
 </ul>
<p></p>
<a href="ohered.php"><img src="img/sad.png"></a>
<br>
<br>
<b><a href="http://fipi.ru/"> <img src="doc/yarlyki/fipi.jpg"></a></b>
<br>
<br>
<b><a href="http://ege.edu.ru/ru/"> <img src="doc/yarlyki/123.jpg"></a></b>
<br>
<br>
<b><a href="http://gia.edu.ru/ru/"> <img src="doc/yarlyki/oge2018.png"></a></b>
<br>
<br>
<b><a href="https://vk.com/egetverobl"> <img src="doc/yarlyki/ege vk.jpg"></a></b>
<br>
<br>
<b><a href="https://xn--90anlffn.xn--80aaccp4ajwpkgbl4lpb.xn--p1ai/"> <img src="doc/yarlyki/40f40e4d8b5ed87d4a7c1255a12f452d7e271733.png"></a></b>
<br>
<br>
<b><a href="https://растимдетей.рф/"> <img src="doc/yarlyki/12.jpg"></a></b>
<br>
<br>
<b><a href="https://bolshayaperemena.online/"> <img src="novosti/aprel/per.jpg"></a></b>
<br>
<br>


<p></p>

<div id="fvb" itemprop="Copy" style="z-index:99;background:#fff;position:fixed;right:0;top:0;
border:2px solid #000;"><a href="http://finevision.ru/?hostname=uob-konakovo.ru&path=/">
<img src="http://finevision.ru/static/banner2.jpg" width="128" height="64"></a></div>
   </div></div>';
   ?>


 
<?
  echo '<div class="centerbox">'; //навигация сайта
 }
  
function RightSight ()
 {    
  echo '</div>';
  echo '<div class="rightbox" align="center">

<div class="container">
   <div class="leftbox">
   <div id="celebs">
<div class="zag" align="center">Горячая линия</div>
<li><a><strong>Горячая линия по организации работы образовательных учреждений в условиях сложной эпидемиологической обстановке 8(48242)4-97-95</strong></a></li> <br>
<li><a><strong>Горячая линия для информирования родителей (законных представителей) несовершеннолетних о мероприятиях, реализуемых в связи с капитальным ремонтом МБОУ СОШ п.Радченко 8(48242)4-97-95</strong></a></li><br>
<li><a><strong>Горячая линия по вопросам проведения итогового сочинения (изложения) в 11-х классах, итогового собеседования по русскому языку в 9-х классах, Государственной итоговой аттестации 8(48242)4-97-95 доб. 524</strong></a></li><br>
<li><a><strong>Справки по вопросам постановки на очередь и оформления детей в муниципальные дошкольные учреждения Конаковского района можно получить в управлении образования по телефону: 4-97-99</strong></a></li><br>


    <ul id="accordion">
<div class="zag" align="center">Новости сайта</div>
    <ul id="accordion">
      <li><a href="oldIndex.php"></a></li>
  '; //текст главы организации
  
  
    include "config/config.inc.php";
    $link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("Не  могу  соединиться  с  MySQL сервером");
    mysql_select_db($db['base']) or die ("Не могу соединиться с базой данных.");
    $query = mysql_query("SELECT * FROM news ORDER BY news.id DESC LIMIT 0 , 30");
    while ($rezult = mysql_fetch_array($query))
     {
      echo '<table width="190" border="0" align="center" bgcolor="#609CC1" class="main_border">';
      echo '<tr><td class=data><b>'.$rezult['date'].'</b></td></tr>';
      echo '<tr><td class=news>'.$rezult['name'].'</td></tr>';
      echo '<tr><td align=right><a href=news.php?id='.$rezult['id'].' class=podr>подробнее...</a>&nbsp;</td></tr>';
      echo '</table><br>';
     
     }
	  echo'</td>'; //новостная лента
  
  echo '
   </tr>

<tr></div>
<div style="position:relative;bottom:0px;">&#169 официальный сайт Управление образования Конаковского района </div></div>'; //нижняя часть ака копирайт
 }

?>