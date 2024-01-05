<?php
    include ("include.php");
    topSide("Тест"); 
?>  
<main class="mainPage">
        <div class="container">
            <section class="slider">
                <div class="imgWrapper">
                    <div class="slide" id="js-show-iframe-wrapper">
                        <div class="pos-banner-fluid bf-22">
                      
                          <div class="bf-22__decor">
                            <div class="bf-22__logo-wrap">
                              <img class="bf-22__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg" alt="Госуслуги">
                              <div class="bf-22__slogan">Решаем вместе</div>
                            </div>
                          </div>

                          
                          <div class="bf-22__content">
                            <div class="bf-22__text">
                              Есть предложения по организации учебного процесса или знаете, как сделать школу лучше?
                            </div>
                      
                            <div class="bf-22__bottom-wrap">
                              <div class="bf-22__btn-wrap">
                                <button class="pos-banner-btn_2" type="button">Написать о проблеме
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
                          <img class="bf-22__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg" alt="Госуслуги">
                          <div class="bf-22__slogan">Решаем вместе</div>
                        </div>
                      </div>

                      
                      <div class="bf-22__content">
                        <div class="bf-22__text">
                          Есть предложения по организации учебного процесса или знаете, как сделать школу лучше?
                        </div>
                  
                        <div class="bf-22__bottom-wrap">
                          <div class="bf-22__btn-wrap">
                            <button class="pos-banner-btn_2" type="button">Написать о проблеме
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
                    <p class="aboutUsTitle">Мы приветствуем Вас на официальном сайте Управления образования</p>
                </div>

                <div class="aboutUsItem">
                    <img src="./assets/images/handIco.svg" class="aboutUsIcon handIcon imgVis">
                    <p class="aboutUsItem-text">
                        Мы приветствуем педагогов, работников дошкольного и дополнительного образования, 
                        заведующих школьными библиотеками, руководителей образовательных учреждений, 
                        учащихся и их родителей на сайте Управления образования 
                        Администрации Конаковского района.
                    </p>
                </div> <!-- ./aboutUsItem -->

                <div class="aboutUsItem aboutUsItem-right">
                    <img src="./assets/images/wifiIco.svg" class="aboutUsIcon wifiIcon imgVis">
                    <p class="aboutUsItem-text">
                        Мы убеждены: страница в Интернете сделает процесс обучения и воспитания более открытым и доступным, 
                        поддержит общественное участие в жизни каждой школы, детского сада, спортивного клуба и творческого объединения детей и юношества, 
                        активизирует использование информационных ресурсов глобальной сети для образования юных конаковцев, 
                        выстроит новые связи работников просвещения и их воспитанников, 
                        послужит становлению современного информационного общества.
                    </p>
                </div> <!-- ./aboutUsItem -->

                <div class="aboutUsItem">
                    <img src="./assets/images/docIco.svg" class="aboutUsIcon docIcon imgVis">
                    <p class="aboutUsItem-text">
                        Здесь вы сможете узнать новости в системе образования, изучить нормативные правовые акты, 
                        прочесть аналитические статьи по вопросам образования.
                    </p>
                </div> <!-- ./aboutUsItem -->


                <div class="aboutUs-mobileText">
                    <p class="aboutUsItem-text">
                        Мы приветствуем педагогов, работников дошкольного и дополнительного образования, 
                        заведующих школьными библиотеками, руководителей образовательных учреждений, 
                        учащихся и их родителей на сайте Управления образования 
                        Администрации Конаковского района.
                    </p>

                    <p class="aboutUsItem-text">
                        Мы убеждены: страница в Интернете сделает процесс обучения и воспитания более открытым и доступным, 
                        поддержит общественное участие в жизни каждой школы, детского сада, спортивного клуба и творческого объединения детей и юношества, 
                        активизирует использование информационных ресурсов глобальной сети для образования юных конаковцев, 
                        выстроит новые связи работников просвещения и их воспитанников, 
                        послужит становлению современного информационного общества.
                    </p>

                    <p class="aboutUsItem-text">
                        Здесь вы сможете узнать новости в системе образования, изучить нормативные правовые акты, 
                        прочесть аналитические статьи по вопросам образования.
                    </p>
                </div>
            </div> 
        </section>

        <div class="container">
            <section class="news">
                <h1 class="title">
                    Новости
                </h1>
                
                <div class="newsWrapper">
                    <?php
                        include("config/config.inc.php");

                        $link = mysqli_connect($db['host'], $db['login'], $db['pass'], $db['base']) or die("Не удалось выполнить подключение");

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

                        while ($rezult = mysqli_fetch_array($query)) {
                            echo '<div class="newsItemWrapper">';
                            echo '<div class="newsItem">';
                            echo '<div class="newsImgWrapper">';
                            echo '<a href=news_page.php?id='.$rezult['id'].'><img src="' . htmlspecialchars(getFirstImageSrc($rezult)) . '" class="newsImage imgVis"></a>';
                            echo '</div>';
                            echo '<div class="contentWrapper">';
                            echo '<h1 class="newsItem-title">Новости</h1>';
                            echo '<a href=news_page.php?id='.$rezult['id'].'><p class="newsItem-text">' . htmlspecialchars(getTextInsideTags($rezult['name'])) . '</p></a>';
                            echo '<p class="newsItem-date">' . htmlspecialchars($rezult['date']) . '</p>';
                            echo '<a href=news_page.php?id='.$rezult['id'].' class="newsItem-link"><img src="./assets/images/arrow.svg" class="newsItemLink-icon"></a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        mysqli_close($link);
                    ?>
                </div>

                <button class="showMore showMore--index">Смотреть ещё</button>

            </section> <!-- ./news -->
        </div> <!-- ./container -->

        <section class="phoneNumbers grayBg">
            <div class="container">
                <h1 class="title">Горячая линия</h1>

                <div class="phoneNumbersWrapper">
                    <div class="phoneItems">
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                Горячая линия по организации работы образовательных 
                                учреждений в условиях сложной эпидемиологической обстановке
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                Горячая линия для информирования родителей (законных представителей) 
                                несовершеннолетних о мероприятиях, реализуемых в связи с капитальным
                                ремонтом МБОУ СОШ п.Радченко
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">8(48242)4-97-95</h1>
                            <p class="phoneItems-text">
                                Горячая линия по вопросам проведения итогового сочинения
                                (изложения) в 11-х классах, 
                                итогового собеседования по русскому языку в 9-х классах, 
                                Государственной итоговой аттестации
                            </p>
                        </div> <!-- ./phoneItem -->
    
                        <div class="phoneItem">
                            <h1 class="phoneItems-title">4-97-99</h1>
                            <p class="phoneItems-text">
                                Справки по вопросам постановки на очередь и оформления детей в муниципальные 
                                дошкольные учреждения Конаковского района можно 
                                получить в управлении образования по телефону
                            </p>
                        </div> <!-- ./phoneItem -->
                    </div>
                    
                    <img src="./assets/images/phone.png" class="phoneImg imgVis">
                </div>

            </div>
        </section> <!-- ./phomeNumbers -->
    </main> <!-- ./mainPage -->

<?
    downSide(); 
?>  
