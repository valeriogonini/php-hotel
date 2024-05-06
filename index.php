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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>

            </tr>
        </thead>
        <?php

        for ($i = 0; $i < count($hotels); $i++) {
            $hotel = $hotels[$i];

            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'];
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center'];

        ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $name; ?> </th>
                    <td><?php echo $description; ?></td>
                    <td>
                        <?php if ($parking === true) {
                            echo 'Si';
                        } else {
                            echo 'No';
                        }
                        ?>

                    </td>
                    <td><?php echo $vote; ?></td>
                    <td><?php echo $distance; ?></td>
                </tr>

            </tbody>
        <?php
        }

        ?>

    </table>

</body>

</html>