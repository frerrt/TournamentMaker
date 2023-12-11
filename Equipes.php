
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Equipestyle.css">
    <title>TOURNAMENT MAKER</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive" class="scrollbar scrollbar-black bordered-black square">
    <div id="home">
    <section class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"><img style="height:50px;width:50px;margin-top:30px;" src="../img/logo.jpg"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Planning
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="planning.html">Mondial</a></li>
                  <li><a class="dropdown-item" href="planning.html">National</a></li>
                  <li><a class="dropdown-item" href="planning.html">Regional</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="main" aria-current="page" href="Equipes.html">Equipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Page2ClassementAP.html">Classement</a>
              </li>
            </ul>
          </div>
          <a style="margin-top:1.6em;" class="butnn" href="formulaire.html" role="button">Connexion</a>
        </div>
      </nav>
    </section>
    <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <strong><font size="20" face="Arial">Equipes du tournois mondiale</font></strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <div class="row m-5">
          <div class="col-md-3">
            <a class="btn-n" href="#equipe1Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/100thievelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe2Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/dwglogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe3Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/fnclogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe4Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/g2logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe5Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/kcorplogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe6Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/roguelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe7Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/t1logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe8Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/vitalitylogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      <strong><font size="20" face="Arial">Equipes du tournois national</font></strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <div class="row m-5">
          <div class="col-md-3">
            <a class="btn-n" href="#equipe1Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/100thievelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe2Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/dwglogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe3Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/fnclogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe4Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/g2logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe5Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/kcorplogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe6Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/roguelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe7Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/t1logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe8Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/vitalitylogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      <strong><font size="20" face="Arial">Equipes du tournois régionale</font></strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <div class="row m-5">
          <div class="col-md-3">
            <a class="btn-n" href="#equipe1Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/100thievelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe2Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/dwglogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe3Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/fnclogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe4Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/g2logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe5Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/kcorplogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe6Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/roguelogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe7Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/t1logo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#equipe8Modal" data-bs-toggle="modal">
              <div class=" row row-2 cards col-6" style="width: 35vh; height: 35vh;">
                <img src="../img/vitalitylogo.png" class="card-img-top" alt="img equipes">
                <!--<a href="#" class="btn btn-primary dark">Go somewhere</a>-->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL --->
    <div id="equipe1Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe1</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <img src="images/echarpe.jpeg" alt="Echarpe" class="w-100" />
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe2Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe2</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe3Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 3</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe4Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 4</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe5Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 5</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe6Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 6</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe7Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 7</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <div id="equipe8Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Equipe 8</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button> <!-- Le bouton pour fermer la fenêtre modale -->
          </div>
          <div class="modal-body">
            <h6>Description</h6>
            <p> une description</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer style="left: 0;bottom: 0;width: 100%;text-align: center; color: white;" class="modal-footer bg-dark ">
    <p>
      &copy; Copyright 2021 Tournament Maker
    </p>
  </footer>
  <!-- Start JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076dO5399.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
  <!-- End JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>