<?php
$currentDate = date('l, F jS');
$currentTime = date('g:ia');

$response = [
    'date' => $currentDate,
    'time' => $currentTime,
];

header('Content-Type: application/json');
echo json_encode($response);
