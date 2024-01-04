<?php
    include("config/config.inc.php");

    $link = mysqli_connect($db['host'], $db['login'], $db['pass'], $db['base']) or die("Что-то пошло не так");

    $page = $_POST['page'];
    $perPage = $_POST['perPage'];
    $startFrom = ($page - 1) * $perPage;

    $query = mysqli_query($link, "SELECT * FROM guestMessages ORDER BY guestMessages.id DESC LIMIT $startFrom, $perPage");

    $output = '';
    $hasNextData = false;

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

    // Проверяем, есть ли данные для следующей порции (от $startFrom + $perPage до $startFrom + 2*$perPage)
    $queryNext = mysqli_query($link, "SELECT * FROM guestMessages ORDER BY guestMessages.id DESC LIMIT " . ($startFrom + $perPage) . ", $perPage");
    $hasNextData = mysqli_num_rows($queryNext) > 0;

    // Используем разделитель для объединения HTML и флага
    $separator = '#####';
    $result = $output . $separator . ($hasNextData ? '1' : '0');

    echo $result;

    mysqli_close($link);
?>
