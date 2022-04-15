<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/style/home.css" rel="stylesheet">
    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Roboto+Mono&display=swap" rel="stylesheet">
    <!-- Title -->
    <title>PHP Project</title>
    <link rel="icon" type="image/x-icon" href="/assets/pablo-918.png">

</head>

<body>
    <div class="background">
        <img src="/assets/pablo-213.png" class="img-bg">
    </div>

    <div class="container box-content">
        <?php
        include_once('header.php');
        ?>

        <div class="container row d-flex my-5">
            <!-- card 1 -->
            <div class="container text-center col-3 card-menu">
                <div class="container-img">
                    <img src="/assets/pablo-214.png" alt="" class="icon-card" style="width: 170px; top: -44px; left: 88px;">
                </div>

                <!-- Dropdown -->
                <div class="box-dropdown">
                    <p>
                        <a class="btn" data-bs-toggle="collapse" href="#clients-menu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Clientes
                        </a>
                    </p>
                    <div class="collapse" id="clients-menu">
                        <a href="/clients/form-clients.html" class="card card-body text-decoration-none">
                            Cadastrar
                        </a>
                        <a href="/clients/list-clients.html" class="card card-body text-decoration-none">
                            Listar
                        </a>
                    </div>
                </div>

            </div>
            <!-- card 2 -->
            <div class="container text-center col-3 card-menu">
                <div class="container-img">
                    <img src="/assets/pablo-278.png" alt="" class="icon-card" style="width: 111px; top: -37px; left: 88px;">
                </div>

                <!-- <a href="/index.html" class="text-decoration-none">
                    <h2 class="title-card">Pedido</h2>
                </a> -->

                <!-- Dropdown -->
                <div class="box-dropdown">
                    <p>
                        <a class="btn" data-bs-toggle="collapse" href="#requests-menu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Pedido
                        </a>
                    </p>
                    <div class="collapse" id="requests-menu">
                        <a href="/requests/form-requests.html" class="card card-body text-decoration-none">
                            Cadastrar
                        </a>
                        <a href="/requests/list-requests.html" class="card card-body text-decoration-none">
                            Listar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container row d-flex py-5">
            <!-- card 3 -->
            <div class="container text-center col-3 card-menu">
                <div class="container-img">
                    <img src="/assets/pablo-648.png" alt="" class="icon-card" style="width: 67px; top: -31px; left: 104px;">
                </div>

                <!-- <a href="/index.html" class="text-decoration-none">
                    <h2 class="title-card">Produtos</h2>
                </a> -->

                <!-- Dropdown -->
                <div class="box-dropdown">
                    <p>
                        <a class="btn" data-bs-toggle="collapse" href="#products-menu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Produtos
                        </a>
                    </p>
                    <div class="collapse" id="products-menu">
                        <a href="/products/form-products.html" class="card card-body text-decoration-none">
                            Cadastrar
                        </a>
                        <a href="/products/list-products.html" class="card card-body text-decoration-none">
                            Listar
                        </a>
                    </div>
                </div>

            </div>
            <!-- card 4 -->
            <div class="container text-center col-3 card-menu">
                <div class="container-img">
                    <img src="/assets/pablo-20.png" alt="" class="icon-card" style="width: 88px; top: -30px; left: 100px;">
                </div>

                <!-- <a href="/index.html" class="text-decoration-none">
                    <h2 class="title-card">Migrações</h2>
                </a> -->

                <!-- Dropdown -->
                <div class="box-dropdown">
                    <p>
                        <a class="btn" data-bs-toggle="collapse" href="#migrations-menu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Migrações
                        </a>
                    </p>
                    <!-- <div class="collapse" id="migrations-menu">
                        <a href="#" class="card card-body text-decoration-none">
                            Cadastrar
                        </a>
                        <a href="#" class="card card-body text-decoration-none">
                            Listar
                        </a>
                    </div> -->
                </div>

            </div>
        </div>
    </div>


    <!-- Import Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>