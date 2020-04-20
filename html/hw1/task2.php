<?php

const MASHA_APPLE = 3;
const MITJA_APPLE = 15;

$koljaAppleDiff = 10;

$newMitjaApple = MITJA_APPLE - $koljaAppleDiff;
$newMashaApple = MASHA_APPLE + $koljaAppleDiff;

var_dump([
    'Стало яблок у Маши: ' . $newMashaApple,
    'Стало яблок у Мити: ' . $newMitjaApple,
]);