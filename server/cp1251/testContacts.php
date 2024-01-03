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
 
    <title>���������� �����������</title>

</head>

<body>

    <div class="errorMessage">�����-�� ������...</div>
    <div class="successMessage">�� �������!</div>

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
                    <a href="./testIndex.php" class="headerBtn">�������</a>
                    <div class="headerBtn" id='menu'>����</div>
                </div>
                
                <a href="./testContacts.php" class="headerItem">��������</a>
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
                <a href="./testIndex.php">�������</a>
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
                <a href="./testContacts.php">��������</a>
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
    
    
    <main class="contactsPage">
        <div class="container">

            <section class="contactsSection">
                <h1 class="title">��������</h1>

                <div class="contactsWrapper">

                    <div class="contactsRow contactsRow--header">
                        <div class="contactsName">
                            <img src="./assets/images/contacts-person.svg" alt="���" class="contactsIco">
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <img src="./assets/images/contacts-phone.svg" alt="������ �������" class="contactsIco">
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <img src="./assets/images/contacts-phone.svg" alt="���������� ������� �������" class="contactsIco">
                        </div>
                        
                        <div class="contactsOffice">
                            <img src="./assets/images/contacts-office.svg" alt="�������" class="contactsIco">
                        </div>
                    </div>


                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">������� ������ ���������</p>
                            <p class="contactsText-position">��������� ���������� �����������</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">������ �������:</p>
                            <p class="contacts-text">4-97-96</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">���������� �������:</p>
                            <p class="contacts-text">501</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">�������:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">������� ������ ���������</p>
                            <p class="contactsText-position">��������� ���������� �����������</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">������ �������:</p>
                            <p class="contacts-text">4-97-96</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">���������� �������:</p>
                            <p class="contacts-text">501</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">�������:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                    <div class="contactsRow">
                        <div class="contactsName">
                            <p class="contactsText-name">������� ������ ���������</p>
                            <p class="contactsText-position">��������� ���������� �����������</p>
                        </div>
                        
                        <div class="contactsDirectPhone">
                            <p class="contactsSubtitle">������ �������:</p>
                            <p class="contacts-text">4-97-96</p>
                        </div>
                        
                        <div class="contactsInternalPhone">
                            <p class="contactsSubtitle">���������� �������:</p>
                            <p class="contacts-text">501</p>
                        </div>
                        
                        <div class="contactsOffice">
                            <p class="contactsSubtitle">�������:</p>
                            <p class="contacts-text">408</p>
                        </div>
                    </div>

                </div> <!-- ./contactsWrapper -->

                <div class="contactsControls">
                    <div class="showMore contactsShowMore">�������� ���</div>

                    <div class="findContainer">
                        <input type="text" class="findInput" placeholder="����� �� �������">
                        <img src="./assets/images/loup.svg" class="findLoupIco">
                    </div>
                </div>
            </section> <!-- ./contacts -->


            <section class="addressDetails">
                <h1 class="title">����� � ���������</h1>

                <p class="addressDetails-text">���������� ����������� ������������� ������������ ������</p>
                <p class="addressDetails-text">171252, �������� �������, �. ��������, ��. �����������, �.13</p>
                <p class="addressDetails-text">����� ����������� �����: <a href="mailto:uob2004@yandex.ru" class="newsLink">uob2004@yandex.ru</a></p>
                <p class="addressDetails-text">��� �� �������� ������� � ���� ����� ������ �� �������� ������� �. ����� �/c 40204810500000000041  </p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">���</span>042809001</p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">���</span>6911008563</p>
                <p class="addressDetails-text"><span class="addressDetails-strongText">���</span>691101001</p>
                <p class="addressDetails-text">��������� ������� ������ ���������</p>
            </section> <!-- ./addressDetails -->


            <section class="guestBook">
                <h1 class="title">�������� �����</h1>

                <div class="guestBookWrapper">
                    <div class="guestBookForm">
                        <form id="guestBook__form">
                            <input name="name" id="name" class="guestBook-input" placeholder="���" type="text">
                            <input name="email" id="email" class="guestBook-input" placeholder="Email" type="email">
                            <input name="text" id="text" class="guestBook-input" placeholder="������" type="text">

                            <button class="showMore guestBook-ShowMore">���������</button>
                        </form>
                    </div>

                    <img src="./assets/images/guestBookArrow.svg" class="guestBookArrow">

                    <h1 class="guestBook-bigText">�������� ���� �����, ������ ��� �����������</h1>
                </div>
            </section>


            <section class="messages">
                <h1 class="title guestBook--title">���������</h1>

                <div class="messagesWrapper">
                    <div class="messagesContainer">

                        <div class="messageItem">
                            <div class="messageItem-header">

                                <div class="messageItem-nameWrapper">
                                    <img class="messageItem-personIco" src="./assets/images/contacts-person.svg" />
                                    <p class="messageItem-name">����</p>
                                </div>

                                <p class="messageItem-date">13/12/2023</p>

                            </div>

                            <p class="messageItem-content">
                                � �����, �������, ���������� ���������� �������� �������
                                ������ ����������� ��� ����������� �������������� ��������.
                            </p>
                        </div>

                        <div class="messageItem">
                            <div class="messageItem-header">

                                <div class="messageItem-nameWrapper">
                                    <img class="messageItem-personIco" src="./assets/images/contacts-person.svg" />
                                    <p class="messageItem-name">�����</p>
                                </div>

                                <p class="messageItem-date">05/09/2022</p>

                            </div>

                            <p class="messageItem-content">
                                ������ �����, ������������� ������������ ������������ 
                                ����� ���������� ����������� �������� ������������� ������� ���������� 
                                ����������. ���� ��� ��� ����������: 
                                ����� �������� ������ ������������������� ������������ ������������ �� ��������.
                            </p>
                        </div>

                        <div class="messageItem">
                            <div class="messageItem-header">

                                <div class="messageItem-nameWrapper">
                                    <img class="messageItem-personIco" src="./assets/images/contacts-person.svg" />
                                    <p class="messageItem-name">����</p>
                                </div>

                                <p class="messageItem-date">13/12/2023</p>

                            </div>

                            <p class="messageItem-content">
                                � �����, �������, ���������� ���������� �������� �������
                                ������ ����������� ��� ����������� �������������� ��������.
                            </p>
                        </div>

                        <button class="showMore messagesShowMore">�������� ���</button>
        
                    </div>    

                    <div class="messageIco">
                        <svg width="659" height="389" viewBox="0 0 659 389" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgIco">
                            <!-- ������������� � ����� -->
                            <rect width="454" height="210" rx="21" transform="matrix(0.866025 -0.5 0.866025 0.5 39.9489 262)"
                                fill="#2F82FF" style="filter: drop-shadow(0px 4px 22.9px rgba(0, 0, 0, 0.375));" />
                            
                            <!-- ������� (�����������) � ����� -->
                            <path id="animatedPolygon"
                                d="M352.255 172.231C349.71 176.508 343.927 179.883 336.547 181.398L58.185 238.544L56.3766 237.5C46.3325 231.701 46.3325 222.299 56.3766 216.5L413.979 10.0383C423.581 4.49431 439.15 4.49431 448.753 10.0383V10.0383L352.255 172.231Z"
                                fill="#599CFF" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                <!-- �������� ��������� transform -->
                                <animateTransform attributeName="transform" type="translate" values="0,0;0,25;0,0" dur="5s" repeatCount="indefinite"
                                    calcMode="spline" keyTimes="0;0.5;1" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" />
                            </path>
                        </svg>

                    </div>
                </div>
                
            </section>

        </div> <!-- ./container -->
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

                    <a href="./testContacts.php" class="navigationsColumn-item">��������</a>
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
</body>
</html>