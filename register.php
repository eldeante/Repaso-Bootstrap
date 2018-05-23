<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maquetación HTML5 Y CSS3</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form navbar-left">
            	<div class="input-group">
                	<input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                </div>
          	</form>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>        
      </div>      
    </div>
  </div>
</nav>    

       <!-- Top content -->
        <div class="top-content" style="margin-top:100px;">
        	
            <div class="inner-bg" id="contenedor">
				
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Registro de Usuario</h3>
                            		<p>Rellene los siguientes campos para registrarse como nuevo usuario:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">

                                <form>
                                  <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre">
                                  </div>

                                  <div class="form-group">
                                    <label for="apellidos">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellidos">
                                  </div>

                                  <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion">
                                  </div>

                                  <div class="form-group">
                                    <label for="telefono">Teléfono:</label>
                                    <input type="number" class="form-control" id="telefono">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email">
                                  </div>

                                  <div class="form-group">
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" class="form-control" id="usuario">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd">
                                  </div>
                                  <button type="submit" class="btn btn-default">Registrar</button>
                                </form>
																
		                    </div>
                        </div>
                    
					</div>
					
            </div>
        
		</div>                
</body>
</html>
