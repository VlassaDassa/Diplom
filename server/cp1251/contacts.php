<?php
    include ("include.php");
    topSide("Контакты"); 
?>  
    <main class="contactsPage">
        <div class="errorMessage">Какая-то ошибка...</div>
        <div class="successMessage">Всё успешно!</div>

        <div class="container">

            <section class="contactsSection">
                <h1 class="title">Контакты</h1>

                <div class="contactsWrapper">

                    <div class="contactsRow contactsRow--header">
                        <div class="contactsName">
                            <img src="./assets/images/contacts-person.svg" alt="Имя" class="contactsIco">
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <img src="./assets/images/contacts-phone.svg" alt="Прямой телефон" class="contactsIco">
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <img src="./assets/images/contacts-phone.svg" alt="Внутренний телефон телефон" class="contactsIco">
                        </div>
                        
                        <div class="contactsOffice">
                            <img src="./assets/images/contacts-office.svg" alt="Кабинет" class="contactsIco">
                        </div>
                    </div>


                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">Кожехов Михаил Сергеевич</p>
                            <p class="contactsText-position">Начальник управления образования</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">Прямой телефон:</p>
                            <p class="contacts-text">4-97-96</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">Внутренний телефон:</p>
                            <p class="contacts-text">501</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">Кабинет:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">Клюшанова Светлана Викторовна</p>
                            <p class="contactsText-position">заместитель начальника управления образования</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">Прямой телефон:</p>
                            <p class="contacts-text">4-97-95</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">Внутренний телефон:</p>
                            <p class="contacts-text">509</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">Кабинет:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">Ферлей Татьяна Юрьевна</p>
                            <p class="contactsText-position">заместитель начальника управления образования</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">Прямой телефон:</p>
                            <p class="contacts-text">4-97-95</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">Внутренний телефон:</p>
                            <p class="contacts-text">523</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">Кабинет:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                </div> <!-- ./contactsWrapper -->

                <div class="contactsControls">
                    <div class="showMore contactsShowMore">Смотреть ещё</div>

                    <div class="findContainer">
                        <input type="text" class="findInput" placeholder="Поиск по фамилии">
                        <img src="./assets/images/loup.svg" class="findLoupIco">
                    </div>
                </div>
            </section> <!-- ./contacts -->


            <section class="addressDetails">
                <h1 class="title">Адрес и реквизиты</h1>

                <p class="addressDetails-text">Управление образования администрации Конаковского района</p>
                <p class="addressDetails-text">171252, Тверская область, г. Конаково, ул. Энергетиков, д.13</p>
                <p class="addressDetails-text">Адрес электронной почты: <a href="mailto:uob2004@yandex.ru" class="newsLink">uob2004@yandex.ru</a></p>
                <p class="addressDetails-text">УФК по Тверской области В ГРКЦ Банка России по Тверской области г. Тверь Р/c 40204810500000000041  </p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">БИК</span>042809001</p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">ИНН</span>6911008563</p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">КПП</span>691101001</p>
                <p class="addressDetails-text">Начальник Кожехов Михаил Сергеевич</p>
            </section> <!-- ./addressDetails -->


            <section class="guestBook">
                <h1 class="title">Гостевая книга</h1>

                <div class="guestBookWrapper">
                    <div class="guestBookForm">
                        <form id="guestBook__form">
                            <input name="name" id="name" class="guestBook-input" placeholder="Имя" type="text">
                            <input name="email" id="email" class="guestBook-input" placeholder="Email" type="email">
                            <input name="text" id="text" class="guestBook-input" placeholder="Вопрос" type="text">

                            <button class="showMore guestBook-ShowMore">Отправить</button>
                        </form>
                    </div>

                    <img src="./assets/images/guestBookArrow.svg" class="guestBookArrow imgVis">

                    <h1 class="guestBook-bigText">Оставьте свой отзыв, вопрос или предложение</h1>
                </div>
            </section>


            <section class="messages">
                <h1 class="title guestBook--title">Сообщения</h1>

                <div class="messagesWrapper">
                    <div class="messagesContainer">
                        <!-- Вывод отзывов -->
                        <?
                            include("include/html.inc.php");
                            include("config/config.inc.php");

                            $link = mysqli_connect($db['host'], $db['login'], $db['pass'], $db['base']) or die("Что-то пошло не так...");
                            mysqli_select_db($link, $db['base']) or die("Что-то пошло не так...");

                            // Делаем запрос на получение первых 3 отзывов
                            $query = mysqli_query($link, "SELECT * FROM guestMessages ORDER BY guestMessages.id DESC LIMIT 3") or die("Что-то пошло не так...");

                            // Проверяем, есть ли данные для следующей порции (от 3 до 6)
                            $queryNext = mysqli_query($link, "SELECT * FROM guestMessages ORDER BY guestMessages.id DESC LIMIT 3, 3") or die("Что-то пошло не так...");
                            $hasNextData = mysqli_num_rows($queryNext) > 0;

                            $output = '';

                            while ($rezult = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                $output .= '<div class="messageItem">';
                                $output .= '<div class="messageItem-header">';
                                $output .= '<div class="messageItem-nameWrapper">';
                                $output .= '<img class="messageItem-personIco" src="./assets/images/contacts-person.svg" />';
                                $output .= '<p class="messageItem-name">'.$rezult['name'].'</p>';
                                $output .= '</div>';
                                $output .= '<p class="messageItem-date">'.$rezult['date'].'</p>';
                                $output .= '</div>';
                                $output .= '<p class="messageItem-content">'.$rezult['text'].'</p>';
                                $output .= '</div>';
                            }

                            // Если есть хотя бы одно сообщение, выводим их и кнопку "Смотреть ещё"
                            if (!empty($output)) {
                                echo $output;
                            }
                            
                            else {
                                // Если нет сообщений, выводим соответствующее сообщение
                                echo '<div class="noMessage">Сообщений нет...</div>';
                            }
                            
                            if ($hasNextData) {
                                echo '<button class="showMore messagesShowMore">Смотреть ещё</button>';
                            }

                            mysqli_close($link);
                        ?>
                    </div>    

                    <div class="messageIco imgVis">
                        <svg width="659" height="389" viewBox="0 0 659 389" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgIco">
                            <!-- Прямоугольник с тенью -->
                            <rect width="454" height="210" rx="21" transform="matrix(0.866025 -0.5 0.866025 0.5 39.9489 262)"
                                fill="#2F82FF" style="filter: drop-shadow(0px 4px 22.9px rgba(0, 0, 0, 0.375));" />
                            
                            <!-- Полигон (треугольник) с тенью -->
                            <path id="animatedPolygon"
                                d="M352.255 172.231C349.71 176.508 343.927 179.883 336.547 181.398L58.185 238.544L56.3766 237.5C46.3325 231.701 46.3325 222.299 56.3766 216.5L413.979 10.0383C423.581 4.49431 439.15 4.49431 448.753 10.0383V10.0383L352.255 172.231Z"
                                fill="#599CFF" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                <!-- Анимация изменения transform -->
                                <animateTransform attributeName="transform" type="translate" values="0,0;0,25;0,0" dur="5s" repeatCount="indefinite"
                                    calcMode="spline" keyTimes="0;0.5;1" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" />
                            </path>
                        </svg>

                    </div>
                </div>
                
            </section>

        </div> <!-- ./container -->
    </main> <!-- ./mainPage -->
<?
    downSide(); 
?>  
