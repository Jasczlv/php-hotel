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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Nome Hotel</th>
                <th>Descrizione</th>
                <th>parcheggio</th>
                <th>voto</th>
                <th>distanza centro</th>
            </tr>
        </thead>
        <tbody>
                <?php 
            foreach($hotels as $index => $hotel){
                echo "<tr>"; 
                foreach($hotel as $hotel_dati){
                    echo "<td>" . $hotel_dati . "</td>";

                } 
                echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>
</body>
</html>

<style>
table, th, td {
  border: 1px solid black;
}
</style>