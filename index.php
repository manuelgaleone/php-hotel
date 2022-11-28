<?php
/*
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G

Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile.

Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus
    - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
    - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
*/

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
</head>

<body>
    <div class="container">
        <!--Heading-->
        <h1 class="text-center py-2">
            Grand Hotel dell'Emilia Romagna:
        </h1>
        <div class="search_box text-center">
            <form action="index.php" method="get">
                <select name="parking" id="parking">
                    <option value="" disabled selected>Filtra per Parcheggio</option>
                    <option value="parking">Con parcheggio</option>
                    <option value="noparking">Senza parcheggio</option>
                </select>
            </form>
        </div>
        <!--//Heading-->
        <!--Hotel List-->
        <table class="table my-3">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $hotel["name"] ?></th>
                        <td class="text-center"><?php echo $hotel["description"] ?></td>
                        <td class="text-center"><?php echo $hotel["parking"] ?></td>
                        <td class="text-center"><?php echo $hotel["vote"] ?></td>
                        <td class="text-center"><?php echo $hotel["distance_to_center"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!--//Hotel List-->

    <!--
    <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li> <?php echo $hotel["name"] . "<br>" . $hotel["description"] . "<br>" . $hotel["vote"] . "<br>" . $hotel["parking"] . "<br>" . $hotel["distance_to_center"] ?></li>
        <?php endforeach; ?>
    </ul>
    -->

    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--//Script-->
</body>

</html>