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

    <title>���������� �����������</title>

</head>

<body>

    <div class="settingVision">
        <img src="./assets/images/closeIco.svg" alt="�������" class="settingVisionCloseBtn">

        <div class="settingVision-row">
            
            <div class="settingVision-item">
                <h1 class="settingVision-title">�����</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="notSerif" class="font-type settingVision-btn settingVision-btn--selected">��� �������</button>
                    <button data-setVis="serif" class="font-type settingVision-btn">� ���������</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">���������� ����� �������</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="spacingSmall" class="letter-space settingVision-btn settingVision-btn--selected">���������</button>
                    <button data-setVis="spacingMedium" class="letter-space settingVision-btn">�������</button>
                    <button data-setVis="spacingBig" class="letter-space settingVision-btn">�������</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">�������� �����������</h1>
                <div class="settingVision-itemWrapper">
                    <button data-setVis="imageShow" class="imgHideShow settingVision-btn">��������</button>
                    <button data-setVis="imageHide" class="imgHideShow settingVision-btn settingVision-btn--selected">�� ��������</button>
                </div>
            </div>

            <div class="settingVision-item">
                <h1 class="settingVision-title">�������</h1>
                <div class="settingVision-itemWrapper">
                    <button class="defaultScale settingVision-btn settingVision-btn--selected">�������</button>
                    <button class="bigScale settingVision-btn">�������</button>
                </div>
            </div>
            

        </div>

        <button class="resetOptions">��������</button>

    </div>

    <div class="overlay"></div>


    <div class="mobileMenu">
        <img src="./assets/images/closeIco.svg" alt="�������" class="mobileMenuClose">

        <div class="mobileMenuWrapper">
              <div class="mobileMenu-title">
                    <div class="mobileMenu-backBtn">
                        <img src="./assets/images/menuArrowLeft.svg" class="backBtn-img">
                    </div>

                    <h1 class="mobileMenu-titleText">����������</h1>
              </div>  

        </div>
    </div> <!-- ./mobileMenu -->
 
    <section class="mobileHeader">
        <div class="container">
            <div class="mobileHeaderWrapper">
                <div class="headerBtnsWrapper">
                    <a href="#" class="headerBtn">�������</a>
                    <div class="headerBtn" id='menu'>����</div>
                </div>
                
                <a href="#" class="headerItem">��������</a>
            </div>
        </div>
    </section> <!-- ./mobileHeader -->
    

    <header class="headerWrapper">
        <div class="header container">

            <p class="headerText">���������� ����������� ������������� ������������ ������</p>
        
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
                �������
            </li>

            <li class="menu_item">
                ����������
            </li>

            <li class="menu_item">
                ������������
            </li>

            <li class="menu_item">
                ���������
            </li>

            <li class="menu_item">
                ���������������� �����������
            </li>

            <li class="menu_item">
                �������
            </li>

            <li class="menu_item menu_item--mainPage">
                <a href="#">��������</a>
            </li>
        </ul> <!-- ./container menuWrapper -->
    </section> <!-- ./menu -->


    <section class="extendedMenu">
        <div class="container extendedMenuWrapper">

            <div class="extendedMenu-titleWrapper">
                <h1 class="extendedMenu-title">����������</h1>
            </div>

            <div class="extendedMenu-linkWrapper">
                <ul class="extendedMenu-linkColumn" id="column1">
                </ul>

                <ul class="extendedMenu-linkColumn"  id="column2">
                </ul>
            </div>

        </div>
    </section> <!-- ./extendedMenu -->
    
    
    <main class="mainPage">
        <div class="container">
            <section class="slider">
                <div class="imgWrapper">
                    <div class="slide" id="js-show-iframe-wrapper">
                        <div class="pos-banner-fluid bf-22">
                      
                          <div class="bf-22__decor">
                            <div class="bf-22__logo-wrap">
                              <img class="bf-22__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg" alt="���������">
                              <div class="bf-22__slogan">������ ������</div>
                            </div>
                          </div>

                          
                          <div class="bf-22__content">
                            <div class="bf-22__text">
                              ���� ����������� �� ����������� �������� �������� ��� ������, ��� ������� ����� �����?
                            </div>
                      
                            <div class="bf-22__bottom-wrap">
                              <div class="bf-22__btn-wrap">
                                <button class="pos-banner-btn_2" type="button">�������� � ��������
                                </button>
                              </div>
                            </div>
                          </div>
                      
                        </div>
                    </div>

                    <img src="./assets/images/slider1.jpg" class="sliderPhoto slide">
                </div>

                <div class="pgnWrapper">
                    <div class="pgnItem pgnItemCurrent"></div>
                    <div class="pgnItem"></div>
                </div>
            </section> <!-- ./slider -->
        </div> <!-- ./container -->

        <div class="container">
            <section class="gosuslugiInfo">

                <img src="./assets/images/slider1.jpg" class="gosulugiPhoto gosulugiPhoto--desktop">
                <img src="./assets/images/godPedagoga.jpg" class="gosulugiPhoto gosulugiPhoto--mobile">

                <div id="js-show-iframe-wrapper" class="js-show-iframe-wrapperMOBILE">
                    <div class="pos-banner-fluid bf-22">
                  
                      <div class="bf-22__decor">
                        <div class="bf-22__logo-wrap">
                          <img class="bf-22__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg" alt="���������">
                          <div class="bf-22__slogan">������ ������</div>
                        </div>
                      </div>

                      
                      <div class="bf-22__content">
                        <div class="bf-22__text">
                          ���� ����������� �� ����������� �������� �������� ��� ������, ��� ������� ����� �����?
                        </div>
                  
                        <div class="bf-22__bottom-wrap">
                          <div class="bf-22__btn-wrap">
                            <button class="pos-banner-btn_2" type="button">�������� � ��������
                            </button>
                          </div>
                        </div>
                      </div>
                  
                    </div>
                </div>
            </section> <!-- ./gosuslugiInfo -->
        </div> <!-- ./container -->

        <section class="aboutUs grayBg">
            <div class="container">
                <div class="aboutUs-titleWrapper">
                    <p class="aboutUsTitle">�� ������������ ��� �� ����������� ����� ���������� �����������</p>
                </div>

                <div class="aboutUsItem">
                    <img src="./assets/images/handIco.svg" class="aboutUsIcon handIcon imgVis">
                    <p class="aboutUsItem-text">
                        �� ������������ ���������, ���������� ����������� � ��������������� �����������, 
                        ���������� ��������� ������������, ������������� ��������������� ����������, 
                        �������� � �� ��������� �� ����� ���������� ����������� 
                        ������������� ������������ ������.
                    </p>
                </div> <!-- ./aboutUsItem -->

                <div class="aboutUsItem aboutUsItem-right">
                    <img src="./assets/images/wifiIco.svg" class="aboutUsIcon wifiIcon imgVis">
                    <p class="aboutUsItem-text">
                        �� ��������: �������� � ��������� ������� ������� �������� � ���������� ����� �������� � ���������, 
                        ��������� ������������ ������� � ����� ������ �����, �������� ����, ����������� ����� � ����������� ����������� ����� � ���������, 
                        ������������ ������������� �������������� �������� ���������� ���� ��� ����������� ���� ����������, 
                        �������� ����� ����� ���������� ����������� � �� �������������, 
                        �������� ����������� ������������ ��������������� ��������.
                    </p>
                </div> <!-- ./aboutUsItem -->

                <div class="aboutUsItem">
                    <img src="./assets/images/docIco.svg" class="aboutUsIcon docIcon imgVis">
                    <p class="aboutUsItem-text">
                        ����� �� ������� ������ ������� � ������� �����������, ������� ����������� �������� ����, 
                        �������� ������������� ������ �� �������� �����������.
                    </p>
                </div> <!-- ./aboutUsItem -->


                <div class="aboutUs-mobileText">
                    <p class="aboutUsItem-text">
                        �� ������������ ���������, ���������� ����������� � ��������������� �����������, 
                        ���������� ��������� ������������, ������������� ��������������� ����������, 
                        �������� � �� ��������� �� ����� ���������� ����������� 
                        ������������� ������������ ������.
                    </p>

                    <p class="aboutUsItem-text">
                        �� ��������: �������� � ��������� ������� ������� �������� � ���������� ����� �������� � ���������, 
                        ��������� ������������ ������� � ����� ������ �����, �������� ����, ����������� ����� � ����������� ����������� ����� � ���������, 
                        ������������ ������������� �������������� �������� ���������� ���� ��� ����������� ���� ����������, 
                        �������� ����� ����� ���������� ����������� � �� �������������, 
                        �������� ����������� ������������ ��������������� ��������.
                    </p>

                    <p class="aboutUsItem-text">
                        ����� �� ������� ������ ������� � ������� �����������, ������� ����������� �������� ����, 
                        �������� ������������� ������ �� �������� �����������.
                    </p>
                </div>
            </div> 
        </section>

        <div class="container">
            <section class="news">
                <h1 class="title">
                    �������
                </h1>
                
                <div class="newsWrapper">
                    <?php
                        include("config/config.inc.php");


                        $link = mysqli_connect($db['host'], $db['login'], $db['pass'], $db['base']) or die("������ ��� ����������� � ���� ������");

                        // ������ ��� ������ ���� ��������
                        $query = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC LIMIT 3");


                        function getFirstParagraph($markup) {
                            $pTextArray = array();
                            preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $markup, $matches);

                            foreach ($matches[1] as $p) {
                                if (!preg_match('/<strong>|<img|<a/', $p)) {
                                    $pTextArray[] = strip_tags($p);
                                }
                            }

                            $firstElement = reset($pTextArray);

                            return $firstElement;
                        }

                        function getFirstImageSrc($markup) {
                            $imgSrcArray = array();
                            preg_match_all('/<img[^>]*src=["\']?([^"\']*)/i', is_array($markup) ? implode(' ', $markup) : $markup, $matches);

                            $imgSrcArray = $matches[1];

                            $firstImageSrc = !empty($imgSrcArray) ? reset($imgSrcArray) : './assets/images/newsEmptyImage.jpg';

                            return $firstImageSrc;
                        }
                        
                        
                        function getTextInsideTags($html) {
                            $text = strip_tags($html);
                            $text = trim($text);
                            return $text;
                        }
                        


                        // ����� ��������
                        while ($rezult = mysqli_fetch_array($query)) {
                            echo '<div class="newsItemWrapper">';
                            echo '<div class="newsItem">';
                            echo '<div class="newsImgWrapper">';
                            echo '<a href=news_page.php?id='.$rezult['id'].'><img src="' . htmlspecialchars(getFirstImageSrc($rezult)) . '" class="newsImage imgVis"></a>';
                            echo '</div>';
                            echo '<div class="contentWrapper">';
                            echo '<h1 class="newsItem-title">�������</h1>';
                            echo '<p class="newsItem-text">' . htmlspecialchars(getTextInsideTags($rezult['name'])) . '</p>';
                            echo '<p class="newsItem-date">' . htmlspecialchars($rezult['date']) . '</p>';
                            echo '<a href=news_page.php?id='.$rezult['id'].' class="newsItem-link"><img src="./assets/images/arrow.svg" class="newsItemLink-icon"></a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }

                        // �������� ���������� � ����� ������
                        mysqli_close($link);
                    ?>
                </div>

                <button class="showMore">�������� ���</button>

            </section> <!-- ./news -->
        </div> <!-- ./container -->

        <section class="phoneNumbers grayBg">
            <div class="container">
                <h1 class="title">������� �����</h1>

                <div class="phoneNumbersWrapper">
                    <div class="phoneItems">
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                ������� ����� �� ����������� ������ ��������������� 
                                ���������� � �������� ������� ������������������ ����������
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                ������� ����� ��� �������������� ��������� (�������� ��������������) 
                                ������������������ � ������������, ����������� � ����� � �����������
                                �������� ���� ��� �.��������
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                ������� ����� �� �������� ���������� ��������� ���������
                                (���������) � 11-� �������, 
                                ��������� ������������� �� �������� ����� � 9-� �������, 
                                ��������������� �������� ����������
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">4-97-99</h1>
                            <p class="phoneItems-text">
                                ������� �� �������� ���������� �� ������� � ���������� ����� � ������������� 
                                ���������� ���������� ������������ ������ ����� 
                                �������� � ���������� ����������� �� ��������
                            </p>
                        </div> <!-- ./phoneItem -->
                    </div>
                    
                    <img src="./assets/images/phone.png" class="phoneImg imgVis">
                </div>

            </div>
        </section> <!-- ./phomeNumbers -->
    </main> <!-- ./mainPage -->


    <footer class="footer">
        <div class="radiusFooter"></div>

        <div class="container">
            <div class="footerContainer">
                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">����������</h1>

                    <a href="#" class="navigationsColumn-item">��������� �� ����������</a>
                    <a href="#" class="navigationsColumn-item">��������� � �����������</a>
                    <a href="#" class="navigationsColumn-item">��� ����</a>
                    <a href="#" class="navigationsColumn-item">����� � ������</a>
                    <a href="#" class="navigationsColumn-item">��������������� ���������</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">���������</h1>

                    <a href="#" class="navigationsColumn-item">����������� ���������</a>
                    <a href="#" class="navigationsColumn-item">������������ ���������</a>
                    <a href="#" class="navigationsColumn-item">������������� ���������</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">���������������� �����������</h1>

                    <a href="#" class="navigationsColumn-item">�����</a>
                    <a href="#" class="navigationsColumn-item">������� ����</a>
                    <a href="#" class="navigationsColumn-item">���������� ��������������� �����������</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">��������</h1>

                    <a href="#" class="navigationsColumn-item">������ �����</a>
                    <a href="#" class="navigationsColumn-item">����� ���������� �������</a>
                    <a href="#" class="navigationsColumn-item">������ ������</a>
                    <a href="#" class="navigationsColumn-item">������� �����</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">��������</h1>

                    <a href="#" class="navigationsColumn-item">��������</a>
                </div>

                <div class="navigationsColumn">
                    <h1 class="navigationsColumn-title">������������</h1>

                    <a href="#" class="navigationsColumn-item">������������</a>
                </div>
            </div> <!-- ./Desktop footer -->

            <div class="mobile_footer_wrapper">
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">����������</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">��������� �� ����������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����� � ������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">��������� ����������</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
    
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">������������</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">������������� ������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">��������������� �������� ����������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">�������������� �����������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����������� ����� � ������� ���������������� �������������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">�������������� ������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������������ ������������ ��������� ������������������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����� � ��������������� �����������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������ � �������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">�������� ����������� � ���������������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����������� ������� �����</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����������� ������� ������ � ������������ �����</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������ �������� �����������</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
    
                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">���������</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">����������� ���������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������������� ���������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������������ ���������</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->


                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">���������������� �����������</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">�����</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">���������� ��������������� �����������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������� ����</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->

                <div class="mobile_footer_wrapper__item">
                    <div class="mobile_footer_wrapper__title">��Ȩ����</div>
                    <ul class="mobile_footer_wrapper__list">
                        <li class="mobile_footer_wrapper__link"><a href="#">������ �����</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������ ������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">����� ���������� �������</a></li>
                        <li class="mobile_footer_wrapper__link"><a href="#">������� �����</a></li>
                    </ul>
                </div> <!-- ./mobile_footer_wrapper__item -->
               
            </div> <!-- ./mobile_footer_wrapper -->

            <div class="contacts">
                <a href=""><img src="./assets/images/vk.svg" class="socialNetWorkIcon"></a> 
                <p class="contactsPhoneNumber">8(48242)4-97-95</p>
            </div>
        </div>

    </footer>

    <button class="scroll-to-top-btn" title="������"></button>

    <img class='themeBtn' src="./assets/images/darkTheme.svg" alt="����� ����">
    <img class='visionBtn' src="./assets/images/visionBtn.svg" alt="������ ��� ������������">


    <script src="./assets/js/index.js"></script>

    <script src="./assets/js/to_up.js"></script>

    <!-- ��� �������� -->
    <script>
        (function(){
          "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);if(t)o=o.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,o)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_22="--pos-banner-fluid-22__",posOptionsInitialBanner22={background:"linear-gradient(#2d73bc 26.49%,#38bafe 79.45%)","grid-template-columns":"100%","grid-template-rows":"262px auto","max-width":"100%","text-font-size":"20px","text-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-2.svg')","bg-url-position":"right bottom","content-padding":"26px 24px 24px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","logo-wrap-left":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_22;Object.keys(e).forEach(function(o){t.style.setProperty(n+o,e[o])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_22;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner22),n=document.getElementById("js-show-iframe-wrapper"),o=n?n.offsetWidth:document.body.offsetWidth;if(o>340)t["button-wrap-max-width"]="209px";if(o>482)t["content-padding"]="24px",t["text-font-size"]="24px";if(o>568)t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="32px 24px",t["bg-url-position"]="calc(100% + 35px) bottom";if(o>610)t["bg-url-position"]="calc(100% + 12px) bottom";if(o>726)t["bg-url-position"]="right bottom";if(o>783)t["grid-template-columns"]="1fr 390px";if(o>820)t["grid-template-columns"]="1fr 420px",t["bg-url-position"]="right bottom";if(o>1098)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-3.svg')",t["bg-url-position"]="calc(100% + 55px) bottom",t["grid-template-columns"]="1fr 557px",t["text-font-size"]="32px",t["content-padding"]="32px 32px 32px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(o>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t["content-padding"]="32px 48px 32px 160px",t.background="linear-gradient(90deg, #2d73bc 5.49%,#38bafe 59.45%, #f8efec 60%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner22);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
        })()
    </script>

    <script>Widget("https://pos.gosuslugi.ru/form", 327974)</script>
</body>
</html>