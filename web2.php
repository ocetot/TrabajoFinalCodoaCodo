<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="esteloss.css">
    <title>web codo a codo</title>
  </head>
  <body>

    <!--***************** nav *********************-->
    <nav class="navbar navbar-expand-lg navbar-light "style= "background-color: #2e2e2e;">
       
        <div class="container-fluid ">

          <!-- aca esta la imagen del logo -->
            <a class="navbar-brand  text-white" href="index.php">
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
                    <a class="nav-link active text-white" aria-current="page" href="#">Los oradores</a>
                  </li>
                  <li class="nav-item rounded mm">
                    <a class="nav-link active text-white" aria-current="page" href="#">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item  rounded mm">
                    <a class="nav-link active text-white" aria-current="page" href="#">Conviévencia en orador</a>
                  </li>
                  <li class="nav-item rounded mm compra">
                    <a class="nav-link active text-warning" aria-current="page" href="#">Compra de Tikets</a>
                  </li>
                  <li class="nav-item rounded mm compra">
                    <a class="nav-link active text-warning" aria-current="page" href="login.php">Login</a>
                  </li>
                  </ul>
                  </div>             
            </div>
          
        
      </nav>
      <!--***************** nav fin *********************-->

      <!--***************** descuentos *********************-->


     <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 m-2">
        
        <div class="col">
          <div class="card h-100 ">
            
            <div class="card-body text-center cuadrouno">
              <p class="tituloydescuento">Estudiantes</p>
            <p class="descuenott">Tiene un descuento</p>
           <p class="tituloydescuento">80%</p>
           <p class="titulofin">Presentar documentación</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            
            <div class="card-body text-center cuadrodos">
              <p class="tituloydescuento">Trainee</p>
            <p class="descuenott">Tiene un descuento</p>
           <p class="tituloydescuento">50%</p>
           <p class="titulofin">Presentar documentación</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            
            <div class="card-body text-center cuadrocuatro">
              <p class="tituloydescuento">Junior</p>
              <p class="descuenott">Tiene un descuento</p>
             <p class="tituloydescuento">15%</p>
             <p class="titulofin">Presentar documentación</p>
            </div>
          </div>
        </div>
        
      </div>
     </div>

      <!-- *******************  fin descuentos *********************--> 

     
      <!-- *************************titulo********************** -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text-center mt-3" style="font-size: 20px;">venta</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center mt-1">Valor de tickets $<span id="precio"></span></h2> 
          </div>
        </div>
      </div>
        <!-- **************************fin titulo********************* -->
<br>

<!-- *****************************formulario*********************************-->
<div class="container">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
  </div>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"></label>
  <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
  
</div>
<div class="row g-3">
  <div class="col">
    <label for="">Cantidad</label>
    <input id="cantidad" type="text" class="form-control" placeholder="" aria-label="First name">
  </div>
  <div class="col">
    <label for="">Categoria</label>
    <select class="form-select" id="select" aria-label="Default select example">
      <option selected value="80">Estudiante</option>
      <option value="50">Trainee</option>
      <option value="15">Junior</option>
          </select>
    
  </div>
</div>
<div class="divdepago ">
  
  <h2 class="text-start pe">Total a Pagar $ <span id="descuento"></span></h2> 
  
</div>
<br>
<br>

  <div class="row">
    <div class="col-6">
      <div class="d-grid gap-2">
        <button class="btn btn-success btncolores" onclick="borrar()" type="button">Borrar</button>
        
      </div>
    </div>
    <div class="col-6">
      <div class="d-grid gap-2">
        <button class="btn btn-success btncolores" onclick="btnclick()" type="button">Resumen</button>
        
      </div>
    </div>
  </div>

</div>
<!-- ********************************** fin del formulario****************************** -->
      
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
    <script src="app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>