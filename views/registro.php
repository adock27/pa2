<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div class="container mt-5">
        <div class="row">
            
            <div class="col">
                <img  src="https://img.freepik.com/free-vector/web-designers-create-graphics-websites-mobile-application-user-interface_1343-555.jpg?size=626&ext=jpg" class="img-fluid" alt="...">
            </div>
            
            <div class="col-sm col-md-5 col-lg-4">
            <h1>Registro de usuario</h1>
            <form method="post" action="../model/registrarUsuarioModel.php" name="signup-form">
            
            <div class="form-element">
                <label>Correo</label>
                <input class="form-control" type="email" name="correo" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input class="form-control" type="password" name="password" required />
            </div>
            <div class="mt-2">
            <a class="btn btn-outline-primary" href="../index.php">Regresar</a>
            <button class="btn btn-primary" type="submit" name="register" value="register">Registrar</button>
            </div>
        </form>
            </div>
        </div>
    </div>


<?php include("footer.php"); ?>