<?php
    include("config/config.inc.php");

    $link = mysqli_connect($db['host'], $db['login'], $db['pass'], $db['base']) or die("Что-то пошло не так");

    $page = $_POST['page'];
    $perPage = $_POST['perPage'];
    $startFrom = ($page - 1) * $perPage;

    $query = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC LIMIT $startFrom, $perPage");

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
        echo '<img src="' . htmlspecialchars(getFirstImageSrc($rezult)) . '" class="newsImage imgVis">';
        echo '</div>';
        echo '<div class="contentWrapper">';
        echo '<h1 class="newsItem-title">Новости</h1>';
        echo '<p class="newsItem-text">' . htmlspecialchars(getTextInsideTags($rezult['name'])) . '</p>';
        echo '<p class="newsItem-date">' . htmlspecialchars($rezult['date']) . '</p>';
        echo '<a href=news_page.php?id=' . $rezult['id'] . ' class="newsItem-link"><img src="./assets/images/arrow.svg" class="newsItemLink-icon"></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    mysqli_close($link);
?>
