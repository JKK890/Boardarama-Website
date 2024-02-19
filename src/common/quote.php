<?php
$jsonData = file_get_contents(__DIR__ . '/../resources/quotes.json');
$quotes = json_decode($jsonData, true);
$randomQuote = $quotes[array_rand($quotes)];

echo "<strong class=\"prose max-w-none\">Today's {$randomQuote['adjective']} quote, from {$randomQuote['author']}:</strong>";
echo "<p class=\"text-sm prose max-w-none\">{$randomQuote['quote']}</p>";