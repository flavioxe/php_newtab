<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/style/home.css" rel="stylesheet">
    <link href="/style/form.css" rel="stylesheet">
    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Title -->
    <title>PHP Project</title>
    <link rel="icon" type="image/x-icon" href="/assets/pablo-918.png">

</head>

<body>
    <div class="background"></div>

    <div class="container box-content">
        <?php
        include_once('header.php');
        ?>

        <div class="container row d-flex my-5">

            <div class="container text-center col-6 card-menu">
                <div class="container-img">
                    <img src="/assets/pablo-278.png" alt="" class="img-thumb img-requests">
                </div>

                <h2 class="color-title">Pedidos</h2>
                <h6 class="color-title">Cadastrar</h6>

                <form>
                    <div class="mb-3 d-flex align-items-start flex-column">
                        <label for="name" class="form-label color-title"><strong>Nome</strong></label>
                        <input type="text" class="form-control" id="name" placeholder="Fulano de Tal">
                    </div>
                    <!-- <div class="mb-3 d-flex align-items-start flex-column">
                      <label for="cpf" class="form-label color-title"><strong>CPF</strong></label>
                      <input type="number" class="form-control" id="cpf" placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3 d-flex align-items-start flex-column">
                      <label for="email" class="form-label color-title"><strong>Email</strong></label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemplo@email.com">
                    </div> -->
                    <div class="d-flex justify-content-between">
                        <a href="/index.html" class="btn">⬅ Home</a>
                        <button type="submit" class="btn btn-success">Cadastrar ✔</button>
                    </div>
                </form>

            </div>

        </div>


    </div>


    <!-- Import Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>