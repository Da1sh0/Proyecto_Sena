<html>
<head>
<title>Consulta de Usuarios</title>
<meta charset="utf8">
</head>
<body>
    <div class="contenedor-principal">
        <h3>Editar empleados registrados</h3>
            <form action="" method="post">
            
                <p>Numero identificacion del empleado:<input type="text" name="NumeroIdentificacionE" value=""required/></p>
                <p>Nombre:<input type="text" name="Nombre1E" value=""required/></p>
            
                <p>Apellido:<input type="text" name="Apellido1E" value=""required/></p>
            
                <p>Estado civil del empleado actual: <label for=""></label></p>
                <p>Nuevo Estado civil del empleado:
                <select name="estadoCivilE" required>
                    <option value="">Seleccione una opcion</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado" >Casado</option>
                    <option value="Union libre">Union libre</option>
                    </select></p>
                <p>Tipo de documento actual: <label for=""></label></p>
                <p>Tipo de documento:
                    <select name="TipoDocE" required>
                    <option value="">Seleccione una opcion</option>
                    <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                    <option value="Tarjeta Indentidad" >Tarjeta Indentidad</option>
                    <option value="Cedula Extranjeria">Cedula Extranjeria</option>
                    </select></p>

                <p>Correo:<input type="text" name="CorreoE" value=""required/></p>
                <p>Celular:<input type="text" name="CelularE" value=""required/></p>
                
                <p>Genero actual: <label for=""></label></p>
                
                <p>Genero del empleado <select name="generoE" required>
                    <option value="">Seleccione una opcion</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="No indica">Prefiro no decir</option>
                    </select></p>

                <p>Fecha nacimiento del empleado:<input type="date" name="FechaNacimiento" value=""required /></p>
                <p>Fecha expedicion del documento:<input type="date" name="Fecha_Exp_Docu" value=""required/></p>
                
                <p><input type="submit" name="enviar" value="Enviar" /></p>
            </form>
        </div>
    </div>
</html>
