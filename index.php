<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Registro de Usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form action="procesar.php" method="POST"> 
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingrese su apellido" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ej: 0991234567" required>
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese su dirección" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
                            </div>

                           
                                <div class="mb-3">
    
                                <label for="mensaje" class="form-label">Mensaje</label>
    
                                <textarea class="form-control" name="mensaje" rows="3" id="mensaje"></textarea>

                            </div>
                            


                            
                            <div class="mt-3">
                                <input type="submit" class="btn btn-primary mt-3" value="Enviar">
                            </div>
                        </form>
                    </div>
                    
                    
                    <div class="card-footer text-center text-muted">
                        © 2025 - Sistema de Registro
                        <div class="text-center mt-4">
                        <img src="img/logo.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 800px; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
</body>
</html>