<?php
require_once 'database/database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stagiaire page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <header>


    </header>
    <main>

        <div class="container mt-5">

            <form class="row gy-2 gx-3 align-items-center">
                <div class="col-auto">
                    <label class="visually-hidden" for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="Nom">
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="">Note</label>
                    <div class="input-group">

                        <input type="text" class="form-control" id="" placeholder="Note">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="">Preference</label>
                    <select class="form-select" id="">
                        <option selected>Genre...</option>
                        <option value="1">homme</option>
                        <option value="2">femme</option>

                    </select>
                </div>

            </form>

            <br>


            <button class="btn btn-primary mb-3">Ajouter</button>
            <br><br>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Genre</th>
                        <th>Note</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stagiaires as $stagiaire): ?>
                        <tr class="<?= $stagiaire['genre'] === 'homme' ? 'table-info' : 'table-danger' ?>">
                            <td><?= $stagiaire['id'] ?></td>
                            <td><?= $stagiaire['nom'] ?></td>
                            <td><?= $stagiaire['genre'] ?></td>
                            <td><?= $stagiaire['note'] ?></td>
                            <td>
                                <a href="#" class="text-dark">Afficher</a> |
                                <a href="#" class="text-dark">Modifier</a> |
                                <a href="#" class="text-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>



    </main>

    <footer>

    </footer>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script> -->

    <script src="js/bootstrap.js"></script>
</body>

</html>