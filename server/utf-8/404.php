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

    <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script>
    <link rel="stylesheet" href="./assets/styles/gosuslugi.css">

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
                    <a href="#" class="headerBtn">Главная</a>
                    <div class="headerBtn" id='menu'>Меню</div>
                </div>
                
                <a href="./contacts.html" class="headerItem">Контакты</a>
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
                Главная
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
                <a href="./contacts.html">Контакты</a>
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
    
    
    <main class="notFoundPage">
        <div class="container">
            <h1 class="notFoundPage__title">404</h1>

            <p class="notFoundPage__paragraph">Страница не найдена или находится в разработке</p>
            <p class="notFoundPage__paragraph">
                Полный перечень страниц находится в <a class="notFoundPage__link" href="./oldIndex.php">старой версии сайта</a>
            </p>
        </div>
    </main> <!-- ./notFoundPage -->


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

                    <a href="./contacts.html" class="navigationsColumn-item">Контакты</a>
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

    <!-- Для госуслуг -->
    <script>
        (function(){
          "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);if(t)o=o.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,o)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_22="--pos-banner-fluid-22__",posOptionsInitialBanner22={background:"linear-gradient(#2d73bc 26.49%,#38bafe 79.45%)","grid-template-columns":"100%","grid-template-rows":"262px auto","max-width":"100%","text-font-size":"20px","text-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-2.svg')","bg-url-position":"right bottom","content-padding":"26px 24px 24px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","logo-wrap-left":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_22;Object.keys(e).forEach(function(o){t.style.setProperty(n+o,e[o])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_22;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner22),n=document.getElementById("js-show-iframe-wrapper"),o=n?n.offsetWidth:document.body.offsetWidth;if(o>340)t["button-wrap-max-width"]="209px";if(o>482)t["content-padding"]="24px",t["text-font-size"]="24px";if(o>568)t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="32px 24px",t["bg-url-position"]="calc(100% + 35px) bottom";if(o>610)t["bg-url-position"]="calc(100% + 12px) bottom";if(o>726)t["bg-url-position"]="right bottom";if(o>783)t["grid-template-columns"]="1fr 390px";if(o>820)t["grid-template-columns"]="1fr 420px",t["bg-url-position"]="right bottom";if(o>1098)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-3.svg')",t["bg-url-position"]="calc(100% + 55px) bottom",t["grid-template-columns"]="1fr 557px",t["text-font-size"]="32px",t["content-padding"]="32px 32px 32px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(o>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t["content-padding"]="32px 48px 32px 160px",t.background="linear-gradient(90deg, #2d73bc 5.49%,#38bafe 59.45%, #f8efec 60%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner22);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
        })()
    </script>

    <script>Widget("https://pos.gosuslugi.ru/form", 327974)</script>
</body>
</html>