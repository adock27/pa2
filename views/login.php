<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div class="container mt-5">
        <div class="row">
            
            
            <div class="col-sm col-md-5 col-lg-4">
            <h1>Login de usuario</h1>
            <form method="post" action="../model/verificarlogin.php" name="signup-form">
            
            <div class="form-element">
                <label>Correo</label>
                <input class="form-control" type="email" name="txtCorreo" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input class="form-control" type="password" name="txtPass" required />
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