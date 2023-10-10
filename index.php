<!-- niziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente 
(es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore) Se non viene specificato nessun filtro,
visualizzare come in precedenza tutti gli hotel. -->


<?php
//importo il file con i dati degli hotel
include 'script.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: lightgray;
        }
    </style>

</head>

<body>


    <div class="container mt-5 px-0 ">

        <form action="" method="get" class="d-flex align-items-end my-4 justify-content-center">

            <div class="parking me-4">
                <span>With parking?</span>

                <select name="parking" id="parking" class="form-select w-auto" aria-label="Default select example">
                    <option value="none">All</option>
                    <option value="true">Yes</option>
                    <option value="false">No</option>
                </select>
            </div>

            <div class="star me-4">
                <span>Rating star</span>

                <select name="rating" id="rating" class="form-select w-auto" aria-label="Default select example">
                    <option value="none">All</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>


            <div class="button-find">
                <button type="submit" class="btn btn-primary">Find</button>
            </div>
        </form>



        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">List</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                foreach ($hotel as $key => $value) : ?>

                    <tr>
                        <th scope="row"><?= $i++ ?></th>

                        <td><?= $value['name'] ?></td>

                        <td><?= $value['description'] ?></td>

                        <td>

                            <?php if ($value['parking']) : ?>

                                Yes

                            <?php else : ?>

                                No

                            <?php endif; ?>

                        </td>


                        <td><?= $value['vote'] ?></td>

                        <td><?= $value['distance_to_center'] . ' km' ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>