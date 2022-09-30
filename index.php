<?php
$animals = [
    $chat = 'CHAT',
    $dragon = 'DRAGON',
    $singe = 'SINGE',
];

$elements = [
    $terre = 'TERRE',
    $eau = 'EAU',
    $air = 'AIR',
];


function writeSecretSentence (string $animal, string $element): string {
     return $animal . " s'incline face à " . $element; 
};
echo writeSecretSentence($animals[0], $elements[0]) . PHP_EOL;
echo writeSecretSentence($animals[1], $elements[1]) . PHP_EOL;
echo writeSecretSentence($animals[2], $elements[2]) . PHP_EOL;