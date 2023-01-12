<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light "style= "background-color: #2e2e2e;">
       
       <div class="container-fluid ">

         <!-- aca esta la imagen del logo -->
           <a class="navbar-brand  text-white" href="index.php">
           <img src="img/logo.png" alt="" width="120" height="70" class="d-inline-block  imgg">Conf Bs As                
           </a>
           
           <!-- este es el boton de menu responsive -->
          
       
     </nav>
     <!--***************** nav fin *********************-->
     <form  action="_functions.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
           
                   <br>
                                    <h3 class="text-center">Iniciar Sesión</h3>
                       <br>
                            <div class="form-group">
                                <label for="correo">Usuario:</label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                             <label for="inputPassword4" class="form-label">Contraseña:</label>
                                              <input type="password" id="password" name="password"class="form-control" id="inputPassword4">
                                              <input type="hidden" name="accion" value="acceso_user">
                             </div>
                            <div class="form-group">
                             <br>

                                <input type="submit"class="btn btn-success" value="Ingresar"> 
                                <br>
                                <br>
                                <div class="container"><a href="registor1.php">Registro</a></div>  
                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


