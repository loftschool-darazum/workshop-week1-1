<?php
$luk = [
    'race' => 'human',
    'inventory' => 'sword',
    'command' => 'rebels'
];

$chowee = [
    'race' => 'wookie',
    'inventory' => 'crossbow',
    'command' => 'neutral'
];

$dartVader = [
    'race' => 'human',
    'inventory' => 'sword',
    'command' => 'imperia'
];

$hanSolo = [
    'race' => 'himan',
    'inventory' => 'blaster',
    'command' => 'neutral'
];

$all = [];
$keys = ['luk', 'dartVader', 'hanSolo', 'chowee'];
foreach ($keys as $key) {
    $all[$key] = $$key;
}

foreach ($all as $name => $hero) {
    echo 'HERO: ' . $name . '<br>';
    echo implode(' ', $hero) . '<br>';
}