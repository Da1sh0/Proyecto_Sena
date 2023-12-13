<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inicio</title>
        </head>
    
    <body>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form id="loginform" action="" method="post">
                        <input type="text" name="correo" placeholder="Correo" required>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                        <div class="checkboz">
                        <input type="checkbox" name="recordar">
                        <label >Recordarme en este equipo</label>
                        
                        </div>
                    
                    </form>
                    <div class="pie-form">
                        <a href="recuCont.php">¿Perdiste tu contraseña?</a>
                        <a href="crearUsu.php?">¿No tienes Cuenta? Creala</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="../index.php">Volver</a>
                </div>
            </div>
        </div>
    </body>
        
</html>
