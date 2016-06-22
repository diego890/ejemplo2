<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['idUsuario'])){
    header("Location:../index.php");
}else{
?>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Register Nuevo Usuario</div>
            <form action="../control/controlUsuario.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Completo"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user" id="user" class="form-control" placeholder="Usuario"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Reingresar Contraseña"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ruc" id="ruc" class="form-control" placeholder="RUC"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion"/>
                        <input type="hidden" name="param_opcion" id="param_opcion" value="grabar">
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Registrar</button>

                    <a href="login.php" class="text-center">Ya estoy registrado, Loguin</a>
                </div>
            </form>

           
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/validaciones.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>

    </body>
</html>
<?php 
    }
?>