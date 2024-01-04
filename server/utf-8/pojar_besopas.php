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


    <main class="pojar_besopas news">
        <div class="container">
            <h1 class="title">Пожарная безопасность</h1>

            <p class="newsParagraph">
                <a href="https://youtu.be/pOm5GI48YPk" class="newsLink">Меры пожарной безопасности в пожароопасный период</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=534" class="newsLink">ИТОГИ регионального этапа творческого смотра-конкурса детских работ «МЧС России глазами детей!»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=531" class="newsLink">Объявлен набор в ВУЗы МЧС России в 2021 году</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=529" class="newsLink">Всероссийский конкурс детско-юношеского творчества по пожарной безопасности «Неопалимая купина»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=528" class="newsLink">Всероссийский конкурс литературного творчества «Человек доброй воли»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=516" class="newsLink">Итоги районного смотра - конкурса детского прикладного творчества «МЧС России глазами детей»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=509" class="newsLink">Устный журнал «МЧС России 30 лет»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=506" class="newsLink">Реализуя проект «Не шути с огнем»</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=493" class="newsLink">«Спасись сам и помоги другим»</a>
            </p>
            <br>
            <br>
            <br>
            
            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                       Нормативные документы
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="meropriyatiya/Pogarnaya%20bezopasnost/prikaz%20neopalimaya.pdf" class="newsLink">Приказ Управления образования от 04.03.2021 г. №52 "Об итогах проведения муниципального этапа Всероссийского конкурса детско-юношеского творчества по пожарной безопасности "Неопалимая купина""</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="meropriyatiya/Pogarnaya%20bezopasnost/prikaz%20mchs.pdf" class="newsLink">Приказ Управления образования от 04.12.2020 г. №294 "Об итогах районного этапа смотра-конкурса на лучшую детскую работу по теме "МЧС России - глазами детей""</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="meropriyatiya/Pogarnaya%20bezopasnost/prikaz%2002.11%20-%2031.12.2020.pdf" class="newsLink">Приказ Управления образования от 05.11.2020 г. №268 "О проведении профилактического мероприятия "Месячник безопасности""</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="meropriyatiya/Pogarnaya%20bezopasnost/prikaz%20o%20meropriyatiyah.pdf" class="newsLink">Приказ Управления образования от 28.10.2020 г. №265 "О принятии дополнительных мер по профилактике пожарной безопасности обучающихся и работников образовательных учреждений в осенне-зимний пожароопасный период"</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="meropriyatiya/Pogarnaya%20bezopasnost/metod.pdf" class="newsLink">Методические рекомендации по предупреждению гибели и травматизма несовершеннолетних на пожарах</a>
            </p>
            <br>


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

                    <a href="./testContacts.php" class="navigationsColumn-item">Контакты</a>
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