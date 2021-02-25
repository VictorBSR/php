<?php

require_once '../vendor/autoload.php';

try {
  $authMongoArray = ['username' => 'admin', 'password' => 'admin', 'authSource' => 'admin'];
$mongoConnect = "mongodb://localhost:27017";
$manager = new MongoDB\Driver\Manager($mongoConnect,$authMongoArray);

$queryDriver = new MongoDB\Driver\Query([], []);
$cursor = $manager->executeQuery('dbphp7.collectionphp', $queryDriver);

$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);

foreach ($cursor as $doc) {
    var_dump($doc);
}
} catch (\Throwable $th) {
  var_dump($th);
}

/*
$cursor = queryMongo('sms','application', [
    'frequency' => [
        '$exists' => true,
        '$gte' => 100,
        '$lte' => 400,
    ]
], [
    'limit' => 3,
    'projection' => [
        'frequency' => true
    ]
]);

foreach ($cursor as $doc) {
  pr($doc);
}
*/
?>