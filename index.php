<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="favicon.png" type="image" sizes="any" rel="icon" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Taurus Global Energy</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript">
      window.onload = () => {
          $('#modalinicio').modal('show');
      }
  </script>

</head>

<body>  

  <!-- Modal -->
  <div class="modal fade" id="modalinicio" tabindex="-1" aria-labelledby="modalinicio" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modalhome">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>

<nav class="navbar navbar-expand-md sticky-top navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="img-fluid logo" src="img/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#aboutus">About Us</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#services">G&G Services</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#reservoir">Reservoir Management</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link wappbuttonmenu" target="_blank" href="https://api.whatsapp.com/send?phone=+18325631170&text=Dej%C3%A1%20tu%20mensaje%20a%20continuaci%C3%B3n%3A">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg> +1 (832) 563-1170</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div id="carouselslide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselslide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselslide" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="img/slide01.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block textslide">
          <p>Geophysical & Geological<br>Consultant</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide03.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block textslide">
          <p>Reservoir Management Consultant<br>Conventional & unconventional</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselslide" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselslide" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container seccion0 text-center">
    <div class="row">
      <div class="col-md-12">
        <h1>OIL & GAS EXPLORATION & DEVELOPMENT<br>CONSULTANT SERVICES</h1>
      </div>
      </div>
    </div>
  </div>

  

  <div id="aboutus" class="container-fluid seccion1">
    <div class="container">
      <div class="row justify-content-center">
          <!-- <img class="logo-blanco" src="img/logo-blanco.svg"> -->
        <div class="col-md-10 align-self-center">
          <p><img class="vineta-negra" src="img/vineta-negra.svg"> TAURUS GLOBAL ENERGY LLC is a Geophysical, Geological and Reservoir Management Consulting Company that grasps an integrated approach towards all the information available.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 align-self-center">
          <p><img class="vineta-negra" src="img/vineta-negra.svg"> Our Mission is to develop compressive workflows to provide the clearest data intepretation and integration in order to maximize the asset´s value, optimizing the economic decisions.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 align-self-center">
          <p><img class="vineta-negra" src="img/vineta-negra.svg"> Our Commitment with the client is to provide fully integrated interpretations of data where all the elements are used together in order to supply our client with a very comprehensive approach in a detailed and regional context.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="container-fluid separador05">
    <div class="row justify-content-center altoseparador">
      <div class="col align-self-center text-center"> <span class="tituloseccion">GEOLOGICAL-GEOPHYSICAL INTERPRETATION</span>
      </div>
    </div>
  </div>


  <div class="container seccion2">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h3>TAURUS GLOBAL ENERGY LLC offers and implements proven effective and innovative interpretation techniques such as:</h3>
        <ul>
          <li>Fully Integrated 2D/3D Interpretations</li>
          <li>Detail and Regional mapping</li>
          <li>Well Seismic Ties</li>
          <li>Structure & Stratigraphic Mapping</li>
          <li>Isochron & Isopach Mapping</li>
          <li>Detail and Regional Velocity Model Building</li>
          <li>Coherency Cube</li>
          <li>Fault Analysis</li>
          <li>Depth Conversion</li>
          <li>Amplitude Anomaly Analysis</li>
          <li>Seismic Attribute Analysis</li>
          <li>AVO / Fluid Detection</li>
          <li>Resources Calculation & Risk Analysis</li>
          <li>Advance Seismic Visualization</li>
          <li>Prospect Delineation & Risk Analysis</li>
          <li>New Well Locations & Prognosis</li>
          <li>Reserves Calculation</li>
        </ul>
      </div>
      <div class="col-md-6 align-self-center text-center">
        <div id="carouselslide2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselslide2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselslide2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselslide2" data-bs-slide-to="2" aria-label="Slide 3"></button>
             <button type="button" data-bs-target="#carouselslide2" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="img/img04.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/img01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img03.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselslide2" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselslide2" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
    </div>
  </div>


  <div id="reservoir" class="container-fluid separador03">
    <div class="row justify-content-center altoseparador">
      <div class="col align-self-center text-center"> <span class="tituloseccion">RESERVOIR MANAGEMENT</span>
      </div>
    </div>
  </div>


  <div class="container seccion3">
    <div class="row">
      <div class="col-md-6">
        <h3>Taurus Global Energy LLC offers and implement effective interpretation techniques such as:</h3>
        <ul>
          <li>Reservoir management</li>
          <li>Reserves & Resources estimation and validation</li>
          <li>Enhanced full field development plans</li>
          <li>Operations and production improvement strategies</li>
          <li>Waterflooding and other enhanced recovery studies</li>
          <li>Artificial lift system definition and optimization</li>
          <li>Potential infill drilling and workover proposals</li>
          <li>Decline curve analysis, material balance and integrated simulation studies</li>
          <li>Well testing and pressure analysis</li>
          <li>Well abandonment plans</li>
        </ul>
      </div>

      <div class="col-md-6 align-self-center text-center">
        <div id="carouselslide3" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselslide3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselslide3" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselslide3" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="img/img08.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/img09.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img10.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselslide3" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselslide3" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
    </div>
  </div>

  <div id="other" class="container-fluid seccion5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2 class="cita">By integration we mean the process of achieving unity of effort among the various subsystems in the accomplishment the understanding of the petroleum system</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 align-self-center text-center py-5">
        <img class="img-fluid" src="img/img07.jpg">
      </div>
    </div>
  </div>

  <div class="container-fluid seccion6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <span class="cargo"><h3>JOSE FOUCAULT </h3><p>&nbsp;| Owner and CEO</p></span>
              <!-- <p>-Owner and CEO-</p> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <img class="img-fluid bio" src="img/jose.jpg">
            </div>
            <div class="col-md-8">
              <p class="bio">Geoscientist with more than 38 years of experience in development and exploration. He has worked for several companies as an employee and consultant, participating in farm-in, farm-out, performing regional studies and detailed evaluations in Latin America and worldwide. Also, managing portfolios, field surveillance plans, strategy delineation plans and business plan execution, design and acquisition seismic and processing campaigns.</p>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <span class="cargo"><h3>LUCAS SANTIMOTEO </h3><p>&nbsp;| Head of Reservoir Management</p></span>
              <!-- <p>-Head of Reservoir Management-</p> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <img class="img-fluid bio" src="img/lucas.jpg">
            </div>
            <div class="col-md-8">
              <p class="bio">Petroleum Engineer  with over 21 years of experience in  exploration and development. He worked in implementing reservoir development projects, performing and managing integrated field studies, as well as business development and asset management. Skills and experience in conventional and unconventional reservoirs (Permian and Vaca Muerta), business and portfolio planning, reserves-resources estimation, asset management, risk analysis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="container-fluid separador04">
    <div class="row justify-content-center altoseparador">
      <div class="col align-self-center text-center"> <span class="tituloseccion">CONTACT US</span>
      </div>
    </div>
  </div>


  <div class="container seccion4">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center w-responsive mx-auto mb-3">By e-mail below or WhatsApp
          <a class="nav-link wappbuttonmenu" target="_blank" href="https://api.whatsapp.com/send?phone=+18325631170&text=Dej%C3%A1%20tu%20mensaje%20a%20continuaci%C3%B3n%3A">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg> +1 (832) 563-1170</a>
        </h3>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.
          <br>
        Our team will come back to you within a matter of hours to help you.</p>
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-12 formulario">
        <form id="contact" action="/contact/contacto.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input class="form-control" name="nombre" placeholder="Name" type="text" tabindex="1" required >
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input class="form-control" name="email" placeholder="Email" type="email" tabindex="2" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form my-2">
                <textarea class="form-control md-textarea" name="mensaje" placeholder="Message" tabindex="5" required></textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit" data-submit="...Enviar">Send</button>
        </form>
      </div>
      
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 align-self-center text-center">
          <img class="logo-blanco-footer" src="img/logo-blanco.svg">
          <hr>
          <p>TAURUS GLOBAL ENERGY LLC is a Geophysical, Geological and Reservoir Management Consulting Company that grasps an integrated approach towards all the information available.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>

</html>