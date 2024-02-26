<?php
include('/var/shared/vendor/autoload.php');
include($_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/../htpasswd/mongodb.inc');

$client = new MongoDB\Client("mongodb://$user:$passwd@$host/$db");

$collection = $client->$db->quotes_mongo;

$ids = $collection->distinct('_id');
srand(date('Ymd'));
shuffle($ids);
$randomId = reset($ids);
$randomQuote = $collection->findOne(['_id' => $randomId]);


echo "<strong class=\"prose max-w-none\">Today's {$randomQuote['adjective']} quote, from {$randomQuote['author']}:</strong>";
echo "<p class=\"text-sm prose max-w-none\">{$randomQuote['quote']}</p>";

