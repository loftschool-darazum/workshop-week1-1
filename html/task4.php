<?php

$day = 'sdfsdf';

switch ($day) {
    case 1:
    case 2:
        echo 'Будний день';
        break;
    case 3:
        echo 'Сегодня среда';
        break;
    case 4:
    case 5:
        echo 'Будний день';
        break;

    case 6:
    case 7:
        echo 'Выходной день';
        break;

    default:
        echo 'Неизвестный день';
}