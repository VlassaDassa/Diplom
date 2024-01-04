<!DOCTYPE html>
<html lang="ru" data-size="small" data-letter-spacing="small" data-font-type="notSerif" data-hide-image="hide">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover,maximum-scale=1,user-scalable=0">
    

    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="./assets/styles/toUp.css">

    <link rel="stylesheet" href="./assets/styles/index.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Управление образования</title>

</head>
<body>

    <div class="settingVision">
        <img src="./assets/images/closeIco.svg" alt="Закрыть" class="settingVisionCloseBtn">

        <div class="settingVision-row">
            
            <div class="settingVision-item">
                <h1 class="settingVision-title">Шрифт</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="notSerif" class="font-type settingVision-btn settingVision-btn--selected">Без засечек</button>
                    <button data-setVis="serif" class="font-type settingVision-btn">С засечками</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">Расстояние между буквами</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="spacingSmall" class="letter-space settingVision-btn settingVision-btn--selected">Маленькое</button>
                    <button data-setVis="spacingMedium" class="letter-space settingVision-btn">Среднее</button>
                    <button data-setVis="spacingBig" class="letter-space settingVision-btn">Большое</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">Скрывать изображения</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="imageShow" class="imgHideShow settingVision-btn">Скрывать</button>
                    <button data-setVis="imageHide" class="imgHideShow settingVision-btn settingVision-btn--selected">Не скрывать</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">Масштаб</h1>
                <div class="settingVision-itemWrapper">
                    <button class="defaultScale settingVision-btn settingVision-btn--selected">Обычный</button>
                    <button class="bigScale settingVision-btn">Большой</button>
                </div>
            </div>
            

        </div>

        <button class="resetOptions">Сбросить</button>

    </div>

    <div class="overlay"></div>

    <div class="mobileMenu">
        <img src="./assets/images/closeIco.svg" alt="Закрыть" class="mobileMenuClose">

        <div class="mobileMenuWrapper">
              <div class="mobileMenu-title">
                    <div class="mobileMenu-backBtn">
                        <img src="./assets/images/menuArrowLeft.svg" class="backBtn-img">
                    </div>

                    <h1 class="mobileMenu-titleText">Управление</h1>
              </div>  

        </div>
    </div> <!-- ./mobileMenu -->
 
    <section class="mobileHeader">
        <div class="container">
            <div class="mobileHeaderWrapper">
                <div class="headerBtnsWrapper">
                    <a href="./testIndex.php" class="headerBtn">Главная</a>
                    <div class="headerBtn" id='menu'>Меню</div>
                </div>
                
                <a href="./testContacts.php" class="headerItem">Контакты</a>
            </div>
        </div>
    </section> <!-- ./mobileHeader -->
    

    <header class="headerWrapper">
        <div class="header container">

            <p class="headerText">УПРАВЛЕНИЕ ОБРАЗОВАНИЯ АДМИНИСТРАЦИИ КОНАКОВСКОГО РАЙОНА</p>
        
            <div class="headerIconWrapper">
                <img class="imgVis" src="./assets/images/headerIcon.svg">
            </div>

            <div class="emblemWrapper">
                <img class="imgVis" src="./assets/images/emblem.svg">
            </div>  

        </div> <!-- ./contaner -->
    </header> <!-- ./headerWrapper -->

    <section class="container">
        <div class="menu line"></div>
    </section> <!-- ./menu line -->

    <section class="menu">
        <ul class="container menuWrapper">
            <li class="menu_item menu_item--mainPage">
                <a href="./testIndex.php">Главная</a>
            </li>

            <li class="menu_item">
                Управление
            </li>

            <li class="menu_item">
                Деятельность
            </li>

            <li class="menu_item">
                Документы
            </li>

            <li class="menu_item">
                Подведомственные организации
            </li>

            <li class="menu_item">
                Приёмная
            </li>

            <li class="menu_item menu_item--mainPage">
                <a href="./testContacts.php">Контакты</a>
            </li>
        </ul> <!-- ./container menuWrapper -->
    </section> <!-- ./menu -->

    <section class="extendedMenu">
        <div class="container extendedMenuWrapper">

            <div class="extendedMenu-titleWrapper">
                <h1 class="extendedMenu-title">Управление</h1>
            </div>

            <div class="extendedMenu-linkWrapper">
                <ul class="extendedMenu-linkColumn" id="column1">
                </ul>

                <ul class="extendedMenu-linkColumn"  id="column2">
                </ul>
            </div>

        </div>
    </section> <!-- ./extendedMenu -->


    <main class="inform_besopas news">
        <div class="container">
            <h1 class="title">Информационная безопасность</h1>

            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Нормативное регулирование
                    </strong>
                </h2>
            </p>

            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_108808/" class="newsLink">Федеральный закон от 29.12.2010 № 436-ФЗ «О защите детей от информации, причиняющей вред их здоровью и развитию» (последняя редакция)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_61801/" class="newsLink">Федеральный закон от 27.07.2006 № 152-ФЗ «О персональных данных» (последняя редакция)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_61798/" class="newsLink">Федеральный закон от 27.07.2006 № 149-ФЗ «Об информации, информационных технологиях и о защите информации» (последняя редакция)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_167591/" class="newsLink">Приказ Минкомсвязи России от 16.06.2014 № 161 «Об утверждении требований к административным и организационным мерам, техническим и программно-аппаратным средствам защиты детей от информации, причиняющей вред их здоровью и (или) развитию»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_123707/" class="newsLink">Письмо Минобрнауки России от 28.04.2014 № ДЛ-115/03 «О направлении методических материалов для обеспечения информационной безопасности детей при использовании ресурсов сети Интернет»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://primdou72.ru/images/INFORMbezop/%D0%9F%D0%B8%D1%81%D1%8C%D0%BC%D0%BE_%D0%BE%D1%82_14.05.2018_N_08-1184_%D0%9E_%D0%BD%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5.PDF" class="newsLink">Письмо Минобрнауки России от 14.05.2018 № 08-1184 «О направлении информации»(вместе с «Методическими рекомендациями о размещении на информационных стендах, официальных интернет-сайтах и других информационных ресурсах общеобразовательных организаций и органов, осуществляющих управление в сфере образования, информации о безопасном поведении и использовании сети «Интернет»)</a>
            </p>
            <br>
            <br>
            <br>
            
            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Педагогическим работникам
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <strong class="newsJustStrong">Памятка педагогам по обеспечению информационной безопасности обучающихся (воспитанников)</strong>
            </p>

            <br>

            <p class="newsParagraph">
                1. Объясните учащимся правила поведения в Интернете. Расскажите о мерах, принимаемых к нарушителям, ответственности за нарушение правил поведения в сети.
            </p>

            <br>

            <p class="newsParagraph">
                2. Совместно с учащимися сформулируйте правила поведения в случае нарушения их прав в Интернете.
            </p>

            <br>

            <p class="newsParagraph">
                3. Приучайте несовершеннолетних уважать права других людей в Интернете. Объясните им смысл понятия «авторское право», расскажите об ответственности за нарушение авторских прав.
            </p>

            <br>

            <p class="newsParagraph">
                4. Проявляйте интерес к «виртуальной» жизни своих учеников, и при необходимости сообщайте родителям о проблемах их детей.
            </p>

            <br>

            <p class="newsParagraph">
                5. Научите учеников внимательно относиться к информации, получаемой из Интернета. Формируйте представление о достоверной и недостоверной информации. Наставайте на посещении проверенных сайтов.
            </p>

            <br>

            <p class="newsParagraph">
                6. Обеспечьте профилактику интернет-зависимости учащихся через вовлечение детей в различные внеклассные мероприятия в реальной жизни (посещение театров, музеев, участие в играх, соревнованиях), чтобы показать, что реальная жизнь намного интереснее виртуальной.
            </p>

            <br>

            <p class="newsParagraph">
                7. Периодически совместно с учащимися анализируйте их занятость и организацию досуга, целесообразность и необходимость использования ими ресурсов сети для учебы и отдыха с целью профилактики интернет-зависимости и обсуждайте с родителями результаты своих наблюдений.
            </p>

            <br>

            <p class="newsParagraph">
                8. В случае возникновения проблем, связанных с Интернет-зависимостью, своевременно доводите информацию до сведения родителей, привлекайте к работе с учащимися и их родителями психолога, социального педагога.
            </p>

            <br>

            <p class="newsParagraph">
                9. Проводите мероприятия, на которых рассказывайте о явлении Интернет-зависимости, ее признаках, способах преодоления.
            </p>

            <br>

            <p class="newsParagraph">
                10. Систематически повышайте свою квалификацию в области информационно-коммуникационных технологий, а также по вопросам здоровьесбережения.
            </p>

            <br>

            <p class="newsParagraph">
                11. Станьте примером для своих учеников. Соблюдайте законодательство в области защиты персональных данных и информационной безопасности. Рационально относитесь к своему здоровью. Разумно используйте в своей жизни возможности интернета и мобильных сетей.
            </p>

            <br>
            <br>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Metodicheskie_rekomendacii_po_informacionnoj_gramo.pdf" class="newsLink">Методические рекомендации по повышению информационной грамотности педагогических работников.</a>
            </p>

            <br>

            <p class="newsParagraph">
                <a href="https://pd.rkn.gov.ru/multimedia/video114.htm" class="newsLink">Видео-материалы для проведения уроков по вопросам защиты персональных данных</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Обучающимся
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Prilojenie%202.pdf" class="newsLink">Информационная памятка для обучающихся</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules.png" class="newsLink">Правила поведения в сети Интернет</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules_internet.pdf" class="newsLink">10 правил безопасности в Интернете</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules_mvd.pdf" class="newsLink">Безопасный Интернет — детям (буклет от МВД)</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Родителям (законным представителям) обучающихся
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Prilojenie%203.pdf" class="newsLink">Памятка для родителей об информационной безопасности детей</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_01.pdf" class="newsLink">Как защититься от Интернет-угроз (брошюра)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_02.pdf" class="newsLink">Информационная безопасность детей (пособие)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_03.pdf" class="newsLink">Безопасность детей в Интернете (памятка)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_04.pdf" class="newsLink">Безопасность детей в Интернете(памятка для родителей)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_05.pdf" class="newsLink">Безопасность детей в Интернете (памятка от компании Майкрософт)</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Детские безопасные сайты
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="http://www.spas-extreme.ru/" class="newsLink">Портал детской безопасности МЧС России</a>
            </p>

            <p class="newsParagraph">
                <a href="http://detionline.com/" class="newsLink">Проект Фонда развития Интернета по созданию безопасного содержимого в сети «Дети онлайн»</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.ya-roditel.ru/" class="newsLink">Я родитель. Сайт для родителей и детей</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.i-deti.org/" class="newsLink">Интерактивный портал, посвященный защите персональных данных</a>
            </p>

            <p class="newsParagraph">
                <a href="https://xn--d1abkefqip0a2f.xn--p1ai/" class="newsLink">Сайт Единого урока по безопасности в сети «Интернет»</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.xn--d1abkefqip0a2f.xn--d1acj3b/" class="newsLink">Сайт Единого урока для детей и подростков</a>
            </p>

            <p class="newsParagraph">
                <a href="http://xn--b1afankxqj2c.xn--p1ai/" class="newsLink">Сетевичок.рф - главный советчик в сети для детей. Здесь можно узнать о безопасности в сети понятным и доступным языком, а при возникновении критической ситуации обратиться за советом. А также принять участие в конкурсах и стать самым цифровым гражданином!</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        Новости
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=526" class="newsLink">В Конаковском районе проведен Единый урок по безопасности в сети Интернет</a>
            </p>

            <p class="newsParagraph">
                <a href="https://m.youtube.com/watch?v=5S%20foVVu3E8M&feature=emb_logo" class="newsLink">Детская безопасность в Интернете - ответственность взрослых</a>
            </p>

        </div>
    </main>



    <footer class="footer">
        <div class="radiusFooter"></div>

        <div class="container">
            <div class="footerContainer">
                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Управление</h1>

                    <a href="#" class="navigationsColumn-item">Положение об управлении</a>
                    <a href="#" class="navigationsColumn-item">Начальник и заместители</a>
                    <a href="#" class="navigationsColumn-item">МКУ ЦМХО</a>
                    <a href="#" class="navigationsColumn-item">Планы и отчёты</a>
                    <a href="#" class="navigationsColumn-item">Противодействие коррупции</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Документы</h1>

                    <a href="#" class="navigationsColumn-item">Федеральные документы</a>
                    <a href="#" class="navigationsColumn-item">Региональные документы</a>
                    <a href="#" class="navigationsColumn-item">Муниципальные документы</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Подведомственные организации</h1>

                    <a href="#" class="navigationsColumn-item">Школы</a>
                    <a href="#" class="navigationsColumn-item">Детские сады</a>
                    <a href="#" class="navigationsColumn-item">Учреждения дополнительного образования</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Приемная</h1>

                    <a href="#" class="navigationsColumn-item">Личный прием</a>
                    <a href="#" class="navigationsColumn-item">Часто задаваемые вопросы</a>
                    <a href="#" class="navigationsColumn-item">Задать вопрос</a>
                    <a href="#" class="navigationsColumn-item">Горячие линии</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Контакты</h1>

                    <a href="./tesContacts.php" class="navigationsColumn-item">Контакты</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">Деятельность</h1>

                    <a href="#" class="navigationsColumn-item">Деятельность</a>
                </div>
            </div> <!-- ./Desktop footer -->

            <div class="mobile_footer_wrapper">
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">Управление</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">Положение об Управлении</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Планы и отчеты</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Структура Управления</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
    
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">ДЕЯТЕЛЬНОСТЬ</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">Муниципальные услуги</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Государственная итоговая аттестация</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Дополнительное образование</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Образование детей с особыми образовательными потребностями</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Воспитательная работа</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Профилактика асоциального поведения несовершеннолетних</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Безопасность</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Прием в образовательные организации</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Работа с кадрами</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Семейное образвоание и самообразование</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Организация питания детей</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Организация летнего отдыха и оздоровления детей</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Оценка качества образования</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
    
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">ДОКУМЕНТЫ</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">Федеральные документы</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Муниципальные документы</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Региональные документы</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->


                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">ПОДВЕДОМСТВЕННЫЕ ОРГАНИЗАЦИИ</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">Школы</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Учреждения дополнительного образования</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Детские сады</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->

                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">ПРИЁМНАЯ</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">Личный прием</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Задать вопрос</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Часто задаваемые вопросы</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">Горячие линии</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
               
            </div> <!-- ./mobile_footer_wrapper -->

            <div class="contacts">
                <a href=""><img src="./assets/images/vk.svg" class="socialNetWorkIcon"></a> 
                <p class="contactsPhoneNumber">8(48242)4-97-95</p>
            </div>
        </div>

    </footer>

    <button class="scroll-to-top-btn" title="Наверх"></button>

    <img class='themeBtn' src="./assets/images/darkTheme.svg" alt="Выбор темы">
    <img class='visionBtn' src="./assets/images/visionBtn.svg" alt="Версия для слабовидящих">


    <script src="./assets/js/index.js"></script>

    <script src="./assets/js/to_up.js"></script>


    
</body>
</html>