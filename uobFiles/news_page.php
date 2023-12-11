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


    <main class="news">
        <div class="container">
                <?php
                    include("include/html.inc.php");
                    include("config/config.inc.php");

                    if (isset($_GET['id']) && preg_match('/^[0-9]*$/', $_GET['id'])) {
                        $p = $_GET['id'];
                    } else {
                        header("Location: index.php");
                    }

                    $link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("��  ����  �����������  �  MySQL ��������");
                    mysql_select_db($db['base']) or die("�� ���� ����������� � ����� ������.");

                    $query = mysql_query("SELECT * FROM news WHERE id = " . $p);

                    $html = mysql_fetch_array($query);

                    // ��������� ���������� ���� body
                    preg_match('/<body>(.*)/is', $html['text'], $matches);

                    // ���� ���� ����������
                    if (!empty($matches[1])) {
                        $bodyContent = $matches[1];

                        // �������� ���� � ��������� ������
                        $bodyContent = preg_replace('/<div align="justify"><\/div>/', '', $bodyContent);
                        $bodyContent = preg_replace('/<p>/', '<p class="newsParagraph">', $bodyContent);
                        $bodyContent = preg_replace('/<strong>/', '<strong class="newsStrong">', $bodyContent);
                        $bodyContent = preg_replace('/<h2>/', '<h2 class="newsSubtitle">', $bodyContent);
                        $bodyContent = preg_replace('/<a /', '<a class="newsLink" ', $bodyContent);
                        $bodyContent = preg_replace('/<img /', '<img class="newsPageImage imgVis" onerror="this.style.display=`none`;" ', $bodyContent);

                        // ������� ������������ ����������
                        echo '<span class="newsTitle-text">�������</span>';
                        echo $bodyContent;
                    } else {
                        echo "���-�� ����� �� ���...";
                    }
                ?>
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
    
</body>
</html>