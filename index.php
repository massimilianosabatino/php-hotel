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

    $park_check = $_GET['park-filter'] ?? 'off';

    //Controlla se un filtro è stato applicato e restituisce un nuovo array
    if($park_check === 'on'){
        $hotels = array_filter($hotels, function($v, $k) {
            return $k == $k && $v == $v['parking'];
        }, ARRAY_FILTER_USE_BOTH);
    };
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Hotels list</h1>
    </header>
    <main>
        <section>
            <div>
                <!-- Filtri -->
                <form action="" method="get">
                    <h2>Filtri di ricerca</h2>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="park" name="park-filter">
                        <label class="form-check-label" for="park">parcheggio</label>
                        <button type="submit">filtra</button>
                    </div>
                </form>
                <!-- /Filtri -->
            </div>
        </section>
        <section>
            <table class="table table-striped">
                <thead>
                    <!-- Intestazione -->
                    <tr class="align-middle">
                        <th scope="col">#</th>
                        <th scope="col">Hotel</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                    <!-- /Intestazione -->
                </thead>
                <tbody>
                    <!-- Singola riga ciclata-->
                    <?php foreach ($hotels as $key => $hotel): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1?></th>
                        <td><?php echo $hotel['name'] ?></td>
                        <td><?php echo $hotel['description'] ?></td>
                        <!-- Controllo disponibilità parcheggio -->
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php echo $hotel['parking'] ? 'checked' : ''; ?> disabled>
                            </div>
                        </td>
                        <!-- /Controllo disponibilità parcheggio -->
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] ?></td>               
                    </tr>
                    <?php endforeach; ?>
                    <!-- /Singola riga ciclata -->
                </tbody>
            </table>
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>