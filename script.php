
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



$parkings = (array_filter($hotels, function ($parking) {

    if ($parking['parking'] && $_GET['parking'] == 'true') {
        return $parking;
    } elseif (!$parking['parking'] && $_GET['parking'] == 'false') {
        return $parking;
    } elseif ($_GET['parking'] === 'none') {
        return $parking;
    }
}));

$hotel = (array_filter($parkings, function ($rating) {

    if ($_GET['rating'] !== 'none') {
        return $rating['vote'] == $_GET['rating'];
    } else {
        return $rating;
    }
}))


?>