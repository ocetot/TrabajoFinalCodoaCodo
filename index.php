<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estelos.css">
    <link rel="STYLESHEET" href="estilos.css">
    <title>web codo a codo</title>
  </head>
  <body>

    <!--***************** nav *********************-->
    <nav class="navbar navbar-expand-lg navbar-light "style= "background-color: #2e2e2e;">
       
        <div class="container-fluid ">

          <!-- aca esta la imagen del logo -->
            <a class="navbar-brand  text-white" href="">
            <img src="img/logo.png" alt="" width="120" height="70" class="d-inline-block  imgg">Conf Bs As                
            </a>
            
            <!-- este es el boton de menu responsive -->
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
              </button>

              <div class=" collapse  navbar-collapse margenav" id="navbarSupportedContent">
                <!-- ms para colocar las listas a la derecha -->
                <ul class=" navbar-nav   ms-auto mb-2 mb-lg-0 ">
                  <!-- rounded para el boreder redondo -->
                  <li class="nav-item rounded mm">
                    <a class="nav-link  active text-white letrasa" aria-current="page" href="#">La conferencia</a>
                  </li>
                  <!-- mm para el margen de los botones -->
                  <li class="nav-item rounded mm ">
                    <a class="nav-link active text-white" aria-current="page" href="#oradores">Los oradores</a>
                  </li>
                  <li class="nav-item rounded mm">
                    <a class="nav-link active text-white" aria-current="page" href="#">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item  rounded mm">
                    <a class="nav-link active text-white" aria-current="page" href="#">Conviértete en orador</a>
                  </li>
                  <li class="nav-item rounded mm compra">
                    <a class="nav-link active text-warning" aria-current="page" href="web2.php">Compra de Tikets</a>
                  </li>
                  <li class="nav-item rounded mm compra">
                    <a class="nav-link active text-warning" aria-current="page" href="login.php">Login</a>
                  </li>
                  
                  </ul>
                  </div>             
            </div>
          </div>
        </div>
      </nav>
      <!--***************** nav fin *********************-->

      <!--***************** carusel *********************-->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active bg-dark">
            <img src="img/bauno.jpg" class="d-block w-100  " alt="...">
            <div class="carousel-caption d-none d-md-block llcentrartexto">
              <h5>Conf Bs As</h5>
              <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia del los expertos que están creando el futuro de internet. Ven a conocer a miembros del evento,
                 a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
                 <button type="button" class="btn btn-outline-light">Quiero ser orador</button>
                 <button type="button" class="btn btncolor">Comprar tickets</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/ba2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block llcentrartexto">
              <h5>Conf Bs As</h5>
              <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia del los expertos que están creando el futuro de internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light">Quiero ser orador</button>

              <button type="button" class="btn btncolor">Comprar tickets</button>

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/ba3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block llcentrartexto">
              <h5>Conf Bs As</h5>
              <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia del los expertos que están creando el futuro de internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light">Quiero ser orador</button>

              <button type="button" class="btn btncolor">Comprar tickets</button>

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- *******************fin carousel********************** -->
      <!-- *************************titulo********************** -->
      <div class="container"id="oradores">
        <div class="row">
          <div class="col-12">
            <p class="text-center mt-3" >Conoce a los oradores</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center mt-1">Los Oradores</h1>
          </div>
        </div>
      </div>
        <!-- **************************fin titulo********************* -->
      <!-- ************************Card********************** --> 
      <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/steve.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="grupodebotones">
              <div class="divbtnamarillo"><p class="text-center pdebtn ">JavaScript </p></div>
              <div class="btnazul"><p class="text-center  pdebtn" >React</p></div>
              </div>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae possimus necessitatibus cupiditate odio ex sunt illo dolores! Ipsum doloribus harum aliquid odit alias? Facilis facere maiores optio quidem. Ratione, eos?</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card h-100">
            <img src="img/bill.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="grupodebotones">
                <div class="divbtnamarillo"><p class="text-center pdebtn ">JavaScript </p></div>
                <div class="btnazul"><p class="text-center  pdebtn" >React</p></div>
                </div>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non earum vel nisi iusto unde sapiente similique. Facilis, rem suscipit iste magni illo officia esse eum, minima, culpa corporis quae deleniti?</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/ada.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="grupodebotones">
              <div class="divbtngris"><p class="text-center pdebtn">Negocios</p></div>
               <div class="divbtnrojo"><p class="text-center pdebtn">Estatus </p></div>
              </div> 
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente delectus cumque voluptas, asperiores quam impedit minima illo accusamus itaque ipsum inventore fugiat eaque animi suscipit quis quod voluptatibus ut! Veniam!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- **************************card************************** -->
   
  <!-- ********************************medio pagina 2********************************* -->
  <div class="continetodo">
  <div class="foto"></div>
  <div class="gris">
    <h3 id="" class="h33">Bs As Octubre</h3>
      <p class="text-white h33"> buenos Aires es la provincia y localidad mas grande del estado de Argentina,
        en los Estado Unidos. Honolulu es la sureña de entre las principales ciudades 
        estadounidenses. Aunque el nombre de Honduras se refiere al area urbana en la costa
        sureste de la isla Oahu, la ciudad y el  condado de Honolulu han formado una ciudad
        condado consolidada que cubre toda la ciudad (aproxiadamente 600 km2 de superficie).

      </p>
      <button type="button" class="btn btn-outline-light" style="margin-left: 25px; margin-top: 25px;">Conose mas</button>
  </div>
</div>
  <!-- ************************************fin medio pagina 2********************************* -->
  <!-- *************************titulo********************** -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="text-center mt-3">Conoce a los oradores</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-1">Los Oradores</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="text-center mt-3">anotate como orador para dar una charla ignite.Cuentanos de que quieres hablar!      </div>
    </div>
  </div>
    <!-- **************************fin titulo********************* -->
    <!-- *************************formulairo********************** -->
    <div class="container formulario">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form6Example1" class="form-control" placeholder="Nombre"/>
                  
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form6Example2" class="form-control" placeholder="Apellido" />
                              </div>
              </div>
            </div>
          
            
          
            
          
            
          
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form6Example7" rows="4"></textarea>
              <label class="form-label" for="form6Example7" >Recuerda incluir un titulo para tu charla</label>
            </div>
          
            
            <div class="d-grid gap-2">
              
              <button class="btn btn-primary mb-4 btncolor pdebtn" type="button">Enviar</button>
            </div>
            <!-- Submit button -->
            
          </form>
        </div>
        </div>
      </div>

          
          <!-- **********************fin de formulario********************** --> 

<!-- ***************************footer***************************  -->
<footer class=".bg-dark.bg-gradient">
<ul class="nav justify-content-center">
  
  <li class="nav-item lista rounded rounded">
    <a class="nav-link text-white" href="#">Preguntas Frecuentes</a>
  </li>
  <li class="nav-item lista rounded rounded">
    <a class="nav-link text-white" href="#">Contactanos</a>
  </li>
  <li class="nav-item lista rounded separar">
    <a class="nav-link disabled text-white">Prensa</a>
  </li>
  <li class="nav-item lista rounded separar">
    <a class="nav-link disabled text-white">Conferencia</a>

  </li>
  <li class="nav-item lista rounded separar">
    <a class="nav-link disabled text-white">Terminos y condiciones</a>

  </li>
  <li class="nav-item lista rounded separar ">
    <a class="nav-link disabled text-white">Privacidad</a>
  </li>
  <li class="nav-item lista text-white rounded separar">
    <a class="nav-link disabled text-white">Estudiantes</a>
  </li>
</ul>
</footer>
<!-- ***************************footer final*********************  -->

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