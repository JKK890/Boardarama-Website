<?php
$currentDate = date('l, F jS');
$currentTime = date('g:ia');

$response = [
    'date' => $currentDate,
    'time' => $currentTime
];

echo json_encode($response);
