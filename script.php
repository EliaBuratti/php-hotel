
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

/* $hotelsFind = [];
//var_dump($hotels);

$parking = $_GET['parking'];
$rating = $_GET['rating'];
//var_dump($_GET['parking'], $_GET['rating']);


if (isset($parking)) {
    $hotelsFind = [];
    //var_dump($parking);
    foreach ($hotels as $value) {
        var_dump('dentro al for');
        //var_dump($value['parking']);
        //var_dump($parking == $value['parking']);
        if ($parking == $value['parking']) {

            $hotelsFind[] = [$value];
        }
        var_dump($hotelsFind);
    }
    $parking = null;
}

//var_dump($hotelsFind); */

/* var_dump($hotels[0]['parking']);
//var_dump($_GET['parking']);

$parking = $_GET['parking'];
$rating = $_GET['rating'];

if (isset($parking)) {
    var_dump('settato su', $parking);


} */





?>