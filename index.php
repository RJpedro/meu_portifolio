<?php
  //*************INCLUDES*************//
  include_once('lib/arrays.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Portifólio</title>
  <link rel="stylesheet" href="assets/css/home.css" />
  <link rel="stylesheet" href="assets/css/habilities.css" />
  <link rel="stylesheet" href="assets/css/projects.css" />
  <link rel="stylesheet" href="assets/css/response.css" />
  <link rel="stylesheet" href="assets/css/keyframes.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- CONTENT INI -->
  <div class="content">
    <!-- HEADER INI -->
    <div class="header">
      <header>
        <nav>
          <h2 class="logo"><img src="assets/img/logomarca.png" alt="" /></h2>
          <ul>
            <li><a href="#div-home">Home</a></li>
            <li><a href="#div-habilities">Habilidades </a></li>
            <li><a href="#div-projects">Projetos</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <!-- HEADER FIM -->

    <!-- MAIN-CONTENT INI -->
    <!-- <div class="main-content"> -->
    <div class="div-home" id="div-home">
      <div class="card-body">
        <div class="card-header" id="imageLogo">
          <img src="assets/img/img_1.jpg" alt="" />
        </div>
        <div class="card-description">
          <div class="card-content">
            <h2>
              João Pedro Dos Santos <br />
              <p>Desenvolvedor Front/Back-End</p>
            </h2>
            <br />
            <p>
              Olá, sou o João Pedro, tenho 20 anos e moro em
              Lavrinhas-Capela do Jacu. Desde sempre me interessei por
              computadores, sempre foi algo que me fascinou e ao entrar na
              área de desenvolvedor (no ano de 2020 quando entrei na Fatec
              de Cruzeiro) ai que me apaixonei.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->

    <div class="div-habilities" id="div-habilities">
      <?php for ($x = 0; $x < 7; $x++) : ?>
        <div class="card-body">
          <div class="card-header" id="imageLogo">
            <img src="<?php echo $arrImages[$x]; ?>" width="180px" />
          </div>
          <div class="card-description">
            <div class="card-content">
              <h2><?php echo $arrHabilities[$x]; ?><br /></h2>
              <br />
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <div class="div-projects" id="div-projects">
      <div class="card-body">
        <div class="card-header" id="imageLogo">
          <img src="<?php echo $arrImages[7];?>" width="180px">
        </div>
        <div class="card-description">
          <div class="card-content">
            <!-- <h2>Em breve<br /></h2> -->
            <br />
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN-CONTENT FIM -->

    <!-- FOOTER INI -->
    <footer class="footer">
      <div class="links">
        <a target="_blank" href="https://www.instagram.com/joao.pedro_1008/"><i class="fa-brands fa-instagram"></i></a>
        <a class="ml-3" target="_blank" href="https://www.linkedin.com/in/joao-pedro-6289bb216/"><i class="fa-brands fa-linkedin"></i></a>
        <a class="ml-3" target="_blank" href="https://github.com/RJpedro"><i class="fa-brands fa-github"></i></a>
      </div>
      <p>Todos os direitos reservados &copy;2022</p>
    </footer>
    <!-- FOOTER FIM -->
  </div>

  <!-- <script src="assets/js/functions.js"></script> -->
  <!-- CONTENT FIM -->
</body>

</html>