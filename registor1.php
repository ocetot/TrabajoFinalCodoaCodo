<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

	<link rel="stylesheet" href="es.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light "style= "background-color: #2e2e2e;">
       
        <div class="container-fluid ">

          <!-- aca esta la imagen del logo -->
            <a class="navbar-brand  text-white" href="index.php">
            <img src="img/logo.png" alt="" width="120" height="70" class="d-inline-block  imgg">Conf Bs As                
            </a>
            
            <!-- este es el boton de menu responsive -->
           
        
      </nav>
      <!--***************** nav fin *********************-->
<form  action="registro1validar.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono *</label>
                                <input type="number"  id="telefono" name="telefono" class="form-control" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Contrase??a:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            
                            
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar1">
                               <a href="./views/user.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>