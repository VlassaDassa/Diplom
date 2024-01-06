<?
    include("include/html.inc.php");
    include("config/config.inc.php");
    include ("include.php");

    if (isset($_GET['id']) && preg_match('/^[0-9]*$/', $_GET['id'])) {
        $p = $_GET['id'];
    } else {
        header("Location: index.php");
    }

    $link = mysql_connect($db['host'], $db['login'], $db['pass']) or die("Что-то пошло не так...");
    mysql_select_db($db['base']) or die("Что-то пошло не так...");

    $query = mysql_query("SELECT * FROM news WHERE id = " . $p);

    $html = mysql_fetch_array($query);

    preg_match('/<body>(.*)/is', $html['text'], $matches);

    if (!empty($matches[1])) {
        $bodyContent = $matches[1];

        $bodyContent = preg_replace('/<div align="justify"><\/div>/', '', $bodyContent);
        $bodyContent = preg_replace('/<p>/', '<p class="newsParagraph">', $bodyContent);
        $bodyContent = preg_replace('/<strong>/', '<strong class="newsStrong">', $bodyContent);
        $bodyContent = preg_replace('/<h2>/', '<h2 class="newsSubtitle">', $bodyContent);
        $bodyContent = preg_replace('/<a /', '<a class="newsLink" ', $bodyContent);
        $bodyContent = preg_replace('/<img /', '<img class="newsPageImage imgVis" onerror="this.style.display=`none`;" ', $bodyContent);

        topSide("Новости"); 
        
        echo '<main class="news">';
        echo '<div class="container">';
        echo '<span class="newsTitle-text">Новости</span>';
        echo $bodyContent;  
        echo '</div>';
        echo '</main>';

        downSide(); 
       
    }
    
    else {
        $redirect_url = "http://uob-konakovo.ru/404.php";

        header("Location: " . $redirect_url);
        exit;
    }
?>