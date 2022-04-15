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
    include_once('../header.php');
    ?>

    <div class="container row d-flex my-5">

      <div class="container text-center col-6 card-menu">
        <div class="container-img">
          <img src="/assets/pablo-214.png" alt="" class="img-thumb">
        </div>

        <h2 class="color-title mb-4">Clientes</h2>
        <h6 class="color-title">Listar</h6>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Cliente</th>
              <th scope="col">CPF</th>
              <th scope="col">Email</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <div class="d-flex justify-content-between mt-3">
          <a href="/index.html" class="btn">⬅ Home</a>
          <a href="/clients/form-clients.html" class="btn">Cadastrar ➡</a>
        </div>

      </div>

    </div>


  </div>


  <!-- Import Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>