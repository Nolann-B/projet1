<?php 


require_once "../vendor/autoload.php";

$db = new MongoDB\Client("mongodb://localhost:27017");

$db = $db->dbpoles->employer;
/*
$datas = [
    "prenom" => "Jawad",
    "nom" => $_Post["name"],
    "age" => 25,
    "gender" => "Male",
    "address" => "123 Main St",
    "city" => "Casablanca",
    "country" => "Morocco",
    "email" => "jawad.nassiri@example.com",
    "phone" => "123-456-7890",
    "occupation" => "Software Engineer"
];

$db->insertOne($datas);*/
$filter = [
    'age' => [
        '$gte' => 8,
        '$lt' => 23
    ]
    ];
$listEmployer = $db->find($filter);

foreach ($listEmployer as $employer) {
    echo ($employer["nom"]);
}