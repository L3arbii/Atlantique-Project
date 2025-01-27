<?php
require_once 'database/database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">SHEIN</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold text-info" href="shop.html">Shop</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.html">Cart</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Register</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


    </header>

    <main class="container">
        <h3 class="mt-3">Shop page</h3>

        <div class="row">
            <div class="col-md-3">
                <h4 class="fw-bold">
                    Categories
                </h4>

                <?php foreach ($Categories as $key => $value): ?>
                    <ul class="list-group list-group-flush mt-">
                        <li class="list-group-item">
                            <?php echo $value ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                

                <h4 class="fw-bold">
                    Colores
                </h4>

                <?php foreach ($colors as $key => $value): ?>
                    <ul class="list-group list-group-flush mt-">
                        <li class="list-group-item">
                        <i class="bi bi-circle-fill" style="color: <?php echo $value ?>;""></i>
                            <?php echo $value ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                
            </div>
            <!-- col 1-->

            <div class="col-md-9">
                <div class="row gy-3 row-cols-1 row-cols-md-3 row-cols-sm-2 ">
                <?php foreach ($produit as $key => $value): ?>

                        <div class="col">
                            <div class="card">
                                <img src="images/produits/<?= $value['img'] ?>" class="card-img-top" alt="">

                                <div class="card-body">
                                    <h5 class="card-title"><?= $value['name'] ?></h5>
                                    <h5>
                                    <?= $value['price'] ?> DH
                                        <del class="text-danger"><?= $value['old_price'] ?> DH</del>
                                    </h5>
                                    <a href="cart.html" class="btn btn-dark fw-bold">

                                        <i class="bi bi-cart-fill"></i>
                                        Add to cart
                                    </a>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!-- col 2-->

                    <?php endforeach ?>
                </div>
                <!-- row 2-->
            </div>
            <!-- col 1-->
        </div>
        <!-- row 1 -->



    </main>

    <footer>

    </footer>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script> -->

    <script src="js/bootstrap.js"></script>
</body>

</html>