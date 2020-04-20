<?php
const DATE_REST = '2020-06-01';
const REST_TIME = 86400 * 7 * 2;

$time = strtotime($_GET['date']);
$restTime = strtotime(DATE_REST);

$timeDiff = $restTime - $time;

echo 'Дата выхода в отпуск: ' . DATE_REST . '<br>';

function getPhrase(int $timeDiff)
{
    // до отпуска больше месяца
    if ($timeDiff > 31 * 86400) {
        return 'До отпуска больше месяца';
    } elseif ($timeDiff > 86400 * 7) {
        return 'До отпуска меньше месяца';
    } elseif ($timeDiff > 86400) {
        return 'До отпуска меньше недели';
    } elseif ($timeDiff > 0) {
        return 'Отпуск завтра';
    } elseif (abs($timeDiff) < REST_TIME) {
        return 'Вы сейчас в отпуске';
    } else {
        return 'Вы уже были в отпуске';
    }
}

$array = [
    '2020-04-20',
    '2020-05-05',
    '2020-05-28',
    '2020-05-31 12:00:00',
    '2020-06-01',
    '2020-07-01',
];

foreach ($array as $date) {
    echo $date . ': ' . getPhrase($restTime - strtotime($date)) . '<br>';
}