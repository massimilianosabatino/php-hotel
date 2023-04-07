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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <header>
        <h1>Hotels list</h1>
    </header>
    <main>
        <ul>
            <!-- Ciclo array -->
            <?php foreach ($hotels as $hotel): ?>
            <li>
                <h2><?php echo $hotel['name'] ?></h2>
                <p><?php echo $hotel['description'] ?></p>
                <div>
                    <!-- Controllo disponibilità parcheggio -->
                    <span>Parcheggio: </span>
                    <?php if($hotel['parking'] === true): ?>
                    <span>Disponibile</span>
                    <?php else: ?>
                    <span>Non disponibile</span>
                    <?php endif; ?>
                    <!-- /Controllo disponibilità parcheggio -->
                </div>
                <div>Voto: <?php echo $hotel['vote'] ?></div>
                <div>Distanza dal centro: <?php echo $hotel['distance_to_center']?></div>
            </li>
            <?php endforeach; ?>
            <!-- /Ciclo array -->
        </ul>
    </main>
</body>
</html>