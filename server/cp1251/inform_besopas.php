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


    <main class="inform_besopas news">
        <div class="container">
            <h1 class="title">�������������� ������������</h1>

            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        ����������� �������������
                    </strong>
                </h2>
            </p>

            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_108808/" class="newsLink">����������� ����� �� 29.12.2010 � 436-�� �� ������ ����� �� ����������, ����������� ���� �� �������� � ��������� (��������� ��������)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_61801/" class="newsLink">����������� ����� �� 27.07.2006 � 152-�� �� ������������ ������� (��������� ��������)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_61798/" class="newsLink">����������� ����� �� 27.07.2006 � 149-�� ��� ����������, �������������� ����������� � � ������ ���������� (��������� ��������)</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_167591/" class="newsLink">������ ����������� ������ �� 16.06.2014 � 161 ��� ����������� ���������� � ���������������� � ��������������� �����, ����������� � ����������-���������� ��������� ������ ����� �� ����������, ����������� ���� �� �������� � (���) ���������</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://www.consultant.ru/document/cons_doc_LAW_123707/" class="newsLink">������ ����������� ������ �� 28.04.2014 � ��-115/03 �� ����������� ������������ ���������� ��� ����������� �������������� ������������ ����� ��� ������������� �������� ���� ��������</a>
            </p>
            <br>
            <p class="newsParagraph">
                <a href="http://primdou72.ru/images/INFORMbezop/%D0%9F%D0%B8%D1%81%D1%8C%D0%BC%D0%BE_%D0%BE%D1%82_14.05.2018_N_08-1184_%D0%9E_%D0%BD%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5.PDF" class="newsLink">������ ����������� ������ �� 14.05.2018 � 08-1184 �� ����������� ����������(������ � �������������� �������������� � ���������� �� �������������� �������, ����������� ��������-������ � ������ �������������� �������� ������������������� ����������� � �������, �������������� ���������� � ����� �����������, ���������� � ���������� ��������� � ������������� ���� ���������)</a>
            </p>
            <br>
            <br>
            <br>
            
            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        �������������� ����������
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <strong class="newsJustStrong">������� ��������� �� ����������� �������������� ������������ ����������� (�������������)</strong>
            </p>

            <br>

            <p class="newsParagraph">
                1. ��������� �������� ������� ��������� � ���������. ���������� � �����, ����������� � �����������, ��������������� �� ��������� ������ ��������� � ����.
            </p>

            <br>

            <p class="newsParagraph">
                2. ��������� � ��������� ������������� ������� ��������� � ������ ��������� �� ���� � ���������.
            </p>

            <br>

            <p class="newsParagraph">
                3. ��������� ������������������ ������� ����� ������ ����� � ���������. ��������� �� ����� ������� ���������� �����, ���������� �� ��������������� �� ��������� ��������� ����.
            </p>

            <br>

            <p class="newsParagraph">
                4. ���������� ������� � ������������ ����� ����� ��������, � ��� ������������� ��������� ��������� � ��������� �� �����.
            </p>

            <br>

            <p class="newsParagraph">
                5. ������� �������� ����������� ���������� � ����������, ���������� �� ���������. ���������� ������������� � ����������� � ������������� ����������. ���������� �� ��������� ����������� ������.
            </p>

            <br>

            <p class="newsParagraph">
                6. ���������� ������������ ��������-����������� �������� ����� ���������� ����� � ��������� ����������� ����������� � �������� ����� (��������� �������, ������, ������� � �����, �������������), ����� ��������, ��� �������� ����� ������� ���������� �����������.
            </p>

            <br>

            <p class="newsParagraph">
                7. ������������ ��������� � ��������� ������������ �� ��������� � ����������� ������, ���������������� � ������������� ������������� ��� �������� ���� ��� ����� � ������ � ����� ������������ ��������-����������� � ���������� � ���������� ���������� ����� ����������.
            </p>

            <br>

            <p class="newsParagraph">
                8. � ������ ������������� �������, ��������� � ��������-������������, ������������ �������� ���������� �� �������� ���������, ����������� � ������ � ��������� � �� ���������� ���������, ����������� ��������.
            </p>

            <br>

            <p class="newsParagraph">
                9. ��������� �����������, �� ������� ������������� � ������� ��������-�����������, �� ���������, �������� �����������.
            </p>

            <br>

            <p class="newsParagraph">
                10. �������������� ��������� ���� ������������ � ������� �������������-���������������� ����������, � ����� �� �������� ������������������.
            </p>

            <br>

            <p class="newsParagraph">
                11. ������� �������� ��� ����� ��������. ���������� ���������������� � ������� ������ ������������ ������ � �������������� ������������. ����������� ���������� � ������ ��������. ������� ����������� � ����� ����� ����������� ��������� � ��������� �����.
            </p>

            <br>
            <br>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Metodicheskie_rekomendacii_po_informacionnoj_gramo.pdf" class="newsLink">������������ ������������ �� ��������� �������������� ����������� �������������� ����������.</a>
            </p>

            <br>

            <p class="newsParagraph">
                <a href="https://pd.rkn.gov.ru/multimedia/video114.htm" class="newsLink">�����-��������� ��� ���������� ������ �� �������� ������ ������������ ������</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        �����������
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Prilojenie%202.pdf" class="newsLink">�������������� ������� ��� �����������</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules.png" class="newsLink">������� ��������� � ���� ��������</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules_internet.pdf" class="newsLink">10 ������ ������������ � ���������</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/rules_mvd.pdf" class="newsLink">���������� �������� � ����� (������ �� ���)</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        ��������� (�������� ��������������) �����������
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/Prilojenie%203.pdf" class="newsLink">������� ��� ��������� �� �������������� ������������ �����</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_01.pdf" class="newsLink">��� ���������� �� ��������-����� (�������)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_02.pdf" class="newsLink">�������������� ������������ ����� (�������)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_03.pdf" class="newsLink">������������ ����� � ��������� (�������)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_04.pdf" class="newsLink">������������ ����� � ���������(������� ��� ���������)</a>
            </p>

            <p class="newsParagraph">
                <a href="INF.BEZOPASNOST/memo_05.pdf" class="newsLink">������������ ����� � ��������� (������� �� �������� ����������)</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        ������� ���������� �����
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="http://www.spas-extreme.ru/" class="newsLink">������ ������� ������������ ��� ������</a>
            </p>

            <p class="newsParagraph">
                <a href="http://detionline.com/" class="newsLink">������ ����� �������� ��������� �� �������� ����������� ����������� � ���� ����� ������</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.ya-roditel.ru/" class="newsLink">� ��������. ���� ��� ��������� � �����</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.i-deti.org/" class="newsLink">������������� ������, ����������� ������ ������������ ������</a>
            </p>

            <p class="newsParagraph">
                <a href="https://xn--d1abkefqip0a2f.xn--p1ai/" class="newsLink">���� ������� ����� �� ������������ � ���� ���������</a>
            </p>

            <p class="newsParagraph">
                <a href="http://www.xn--d1abkefqip0a2f.xn--d1acj3b/" class="newsLink">���� ������� ����� ��� ����� � ����������</a>
            </p>

            <p class="newsParagraph">
                <a href="http://xn--b1afankxqj2c.xn--p1ai/" class="newsLink">���������.�� - ������� �������� � ���� ��� �����. ����� ����� ������ � ������������ � ���� �������� � ��������� ������, � ��� ������������� ����������� �������� ���������� �� �������. � ����� ������� ������� � ��������� � ����� ����� �������� �����������!</a>
            </p>

            <br>
            <br>
            <br>

            <p class="newsParagraph">
                <h2 class="newsSubtitle">
                    <strong class="newsStrong">
                        �������
                    </strong>
                </h2>
            </p>
            <p class="newsParagraph">
                <a href="http://www.uob-konakovo.ru/news_page.php?id=526" class="newsLink">� ����������� ������ �������� ������ ���� �� ������������ � ���� ��������</a>
            </p>

            <p class="newsParagraph">
                <a href="https://m.youtube.com/watch?v=5S%20foVVu3E8M&feature=emb_logo" class="newsLink">������� ������������ � ��������� - ��������������� ��������</a>
            </p>

        </div>
    </main>



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

                    <a href="./tesContacts.php" class="navigationsColumn-item">��������</a>
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