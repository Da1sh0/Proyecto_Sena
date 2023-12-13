<html>
<head>
<title>Registro Empleados</title>
<meta charset="utf8">
</head>
<body>
    <div class="contenedor-principal">
        <form action="" method="post">
        <h3>INGRESE DATOS DEL EMPLEADO A REGISTRAR</h3>
            <p>Numero identificacion del empleado:<input type="text" name="NumeroIdentificacionE" required/></p>
            <p>Nombre:<input type="text" name="Nombre1E" required/></p>
            
            <p>Apellido:<input type="text" name="Apellido1E" required/></p>
            
            <p>Estado civil del empleado
            <select name="estadoCivilE" required>
                <option value="">Seleccione una opcion</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado" >Casado</option>
                <option value="Union libre">Union libre</option>
                </select></p>
            <p>Tipo Documento
                <select name="TipoDocE" required>
                <option value="">Seleccione una opcion</option>
                <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                <option value="Tarjeta Indentidad" >Tarjeta Indentidad</option>
                <option value="Cedula Extranjeria">Cedula Extranjeria</option>
                </select></p>

            <p>Correo:<input type="text" name="CorreoE" required/></p>
            <p>Celular:<input type="text" name="CelularE" required/></p>
            <p>Genero del empleado <select name="generoE" required>
                <option value="">Seleccione una opcion</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="No indica">Prefiro no decir</option>
                </select></p>

            <p>Fecha nacimiento del empleado:<input type="date" name="FechaNacimiento" required /></p>
            <p>Fecha expedicion del documento:<input type="date" name="Fecha_Exp_Docu" required/></p>
            <input type="hidden" name="usuar" value="">
            <p><input type="submit" name="enviar" value="Enviar" /></p>
        </form>
    </div>

</body>
</html>

