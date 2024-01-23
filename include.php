<!-- Шаблонный код -->


<!-- Верхняя часть -->
<?php
    function topSide ($title) {
        echo
        
        '
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
            
                <title>'.$title.'</title>
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
                                <a href="./index.php" class="headerBtn">Главная</a>
                                <div class="headerBtn" id="menu">Меню</div>
                            </div>
                            
                            <a href="./contacts.php" class="headerItem">Контакты</a>
                        </div>
                    </div>
                </section> <!-- ./mobileHeader -->
                
            
                <header class="headerWrapper">
                    <div class="header container">
            
                        <p class="headerText">УПРАВЛЕНИЕ ОБРАЗОВАНИЯ КОНАКОВСКОГО МУНИЦИПАЛЬНОГО ОКРУГА</p>
                    
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
                            <a href="./index.php">Главная</a>
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
                            <a href="./contacts.php">Контакты</a>
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
        ';
    }
?>

<?
    function downSide() {
        echo    
            '
                        <footer class="footer">
                        <div class="radiusFooter"></div>
                
                        <div class="container">
                            <div class="footerContainer">
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Управление</h1>
                
                                    <a href="./404.php" class="navigationsColumn-item">Положение об управлении</a>
                                    <a href="./404.php" class="navigationsColumn-item">Начальник и заместители</a>
                                    <a href="./404.php" class="navigationsColumn-item">МКУ ЦМХО</a>
                                    <a href="./404.php" class="navigationsColumn-item">Планы и отчёты</a>
                                    <a href="./anticorruption.php" class="navigationsColumn-item">Противодействие коррупции</a>
                                </div>
                
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Документы</h1>
                
                                    <a href="./404.php" class="navigationsColumn-item">Федеральные документы</a>
                                    <a href="./404.php" class="navigationsColumn-item">Региональные документы</a>
                                    <a href="./404.php" class="navigationsColumn-item">Муниципальные документы</a>
                                </div>
                
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Подведомственные организации</h1>
                
                                    <a href="./schools.php" class="navigationsColumn-item">Школы</a>
                                    <a href="./detSad.php" class="navigationsColumn-item">Детские сады</a>
                                    <a href="./404.php" class="navigationsColumn-item">Учреждения дополнительного образования</a>
                                </div>
                
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Приемная</h1>
                
                                    <a href="./404.php" class="navigationsColumn-item">Личный прием</a>
                                    <a href="./404.php" class="navigationsColumn-item">Часто задаваемые вопросы</a>
                                    <a href="./404.php" class="navigationsColumn-item">Задать вопрос</a>
                                    <a href="./404.php" class="navigationsColumn-item">Горячие линии</a>
                                </div>
                
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Контакты</h1>
                
                                    <a href="./contacts.php" class="navigationsColumn-item">Контакты</a>
                                </div>
                
                                <div class="navigationsColumn">
                                    <h1 class="navigationsColumn-title">Деятельность</h1>
                
                                    <a href="./404.php" class="navigationsColumn-item">Деятельность</a>
                                </div>
                            </div> <!-- ./Desktop footer -->
                
                            <div class="mobile_footer_wrapper">
                                <div class="mobile_footer_wrapper__item">
                                    <div class="mobile_footer_wrapper__title">Управление</div>
                                    <ul class="mobile_footer_wrapper__list">
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Положение об Управлении</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Планы и отчеты</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Структура Управления</a></li>
                                    </ul>
                                </div> <!-- ./mobile_footer_wrapper__item -->
                    
                                <div class="mobile_footer_wrapper__item">
                                    <div class="mobile_footer_wrapper__title">ДЕЯТЕЛЬНОСТЬ</div>
                                    <ul class="mobile_footer_wrapper__list">
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Муниципальные услуги</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Государственная итоговая аттестация</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Дополнительное образование</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Образование детей с особыми образовательными потребностями</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Воспитательная работа</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Профилактика асоциального поведения несовершеннолетних</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Безопасность</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Прием в образовательные организации</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Работа с кадрами</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Семейное образвоание и самообразование</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Организация питания детей</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Организация летнего отдыха и оздоровления детей</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Оценка качества образования</a></li>
                                    </ul>
                                </div> <!-- ./mobile_footer_wrapper__item -->
                    
                                <div class="mobile_footer_wrapper__item">
                                    <div class="mobile_footer_wrapper__title">ДОКУМЕНТЫ</div>
                                    <ul class="mobile_footer_wrapper__list">
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Федеральные документы</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Муниципальные документы</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Региональные документы</a></li>
                                    </ul>
                                </div> <!-- ./mobile_footer_wrapper__item -->
                
                
                                <div class="mobile_footer_wrapper__item">
                                    <div class="mobile_footer_wrapper__title">ПОДВЕДОМСТВЕННЫЕ ОРГАНИЗАЦИИ</div>
                                    <ul class="mobile_footer_wrapper__list">
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Школы</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Учреждения дополнительного образования</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Детские сады</a></li>
                                    </ul>
                                </div> <!-- ./mobile_footer_wrapper__item -->
                
                                <div class="mobile_footer_wrapper__item">
                                    <div class="mobile_footer_wrapper__title">ПРИЁМНАЯ</div>
                                    <ul class="mobile_footer_wrapper__list">
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Личный прием</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Задать вопрос</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Часто задаваемые вопросы</a></li>
                                        <li class="mobile_footer_wrapper__link"><a href="./404.php">Горячие линии</a></li>
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
                
                    <img class="themeBtn" src="./assets/images/darkTheme.svg" alt="Выбор темы" title="Выбор темы">
                    <img class="visionBtn" src="./assets/images/visionBtn.svg" alt="Версия для слабовидящих" title="Версия для слабовидящих">
                
                
                    <script src="./assets/js/index.js"></script>
                
                    <script src="./assets/js/to_up.js"></script>
                </body>
                </html>
            ';
    }

?>