<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

 <img src="Imagen1.jpg" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 200px; height: auto;">
<br>
<h2>Estudiante: SEGUNDO ANIBAL COBACANGO QUILUMBAQUíN</h2>
<h2>Carrera: TSDS</h2>
<h2>Asignatura: Sistemas Operativos de Administración de Servidores</h2>
<h2>Docente: Darwin Chamba</h2>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Servidores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
        }
        p {
            text-align: justify;
        }
    </style>
</head>
<body>
    <h1>Lecion 2: Administración de Servidores</h1>

    <h2> Dominio</h2>
    <p>
        Un dominio es el nombre único que identifica a un sitio web en internet y permite que los usuarios accedan a él fácilmente sin necesidad de recordar direcciones numéricas (IP). Está formado por un nombre y una extensión, como por ejemplo <strong>miempresa.com</strong> o <strong>colegio.ec</strong>. Los dominios funcionan como una dirección de casa: en lugar de decir una serie de números, usas un nombre sencillo que te lleva al lugar correcto. Gracias a los dominios, los sitios web pueden ser recordados y encontrados de manera práctica por cualquier persona.
    </p>

    <h2> Servidor</h2>
    <p>
        Un servidor es un equipo informático de alto rendimiento que se encarga de almacenar, procesar y entregar la información de un sitio web u otros servicios digitales a los usuarios que los solicitan. Estos servidores están diseñados para funcionar las 24 horas del día, garantizando que las páginas estén siempre disponibles en cualquier parte del mundo. Cada servidor tiene una dirección IP única, y cuando un usuario escribe un dominio en su navegador, este se conecta al servidor correspondiente para mostrar la página solicitada.
    </p>

    <h2> Hosting</h2>
    <p>
        El hosting es el servicio de alojamiento en un servidor donde se guardan los archivos, imágenes, bases de datos y todo el contenido que compone un sitio web. Sin un hosting, un dominio no tendría a dónde apuntar ni un lugar desde el cual mostrar la información. Existen diferentes tipos de hosting, como el compartido, VPS, dedicado o en la nube, que varían según el nivel de recursos y control que se necesite. En la práctica, contratar un hosting significa alquilar espacio en un servidor para que una página web pueda ser publicada y accesible en internet.
    </p>

</body>
</html>
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
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
        <img src="img/logo.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 1500px; height: auto;">
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>        
        
  <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Comprobante</title>
</head>
<body>
  <h2>Comprobante de Pago de Supletorio</h2>
  <img src="VOUCHER.jpg" alt="Comprobante de pago" width="500">
</body>
</html>  

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalación de Ubuntu en Oracle VM VirtualBox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        h2 {
            color: #34495e;
            margin-top: 25px;
        }
        ul {
            margin-left: 20px;
        }
        li {
            margin-bottom: 8px;
        }
        .box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <h1>EXAMEN SUPLETORIO</h1>
    <h1>Instalación de Ubuntu en Oracle VM VirtualBox</h1>

    <div class="box">
        <h2>1️⃣ Descargar los programas necesarios</h2>
        <ul>
            <li>Descarga <strong>Oracle VM VirtualBox</strong> desde la página oficial.</li>
            <li>Descarga la <strong>imagen ISO de Ubuntu</strong> desde <a href="https://ubuntu.com/download/desktop" target="_blank">ubuntu.com</a>.</li>
        </ul>
         <img src="V1.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
         <img src="V2.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

        <h2>2️⃣ Crear una nueva máquina virtual</h2>
        <ul>
            <li>Abre VirtualBox y haz clic en <strong>Nueva</strong>.</li>
            <li>Nombre: Ubuntu | Tipo: Linux | Versión: Ubuntu (64-bit).</li>
            <li>RAM: mínimo 2048 MB (mejor 4096 MB si tu PC lo permite).</li>
            <li>Disco duro virtual: VDI, tamaño dinámico, 25 GB mínimo.</li>
        </ul>
          <img src="V3.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
          <img src="V4.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
          <img src="V11.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
        <h2>3️⃣ Montar la ISO de Ubuntu</h2>
        <ul>
            <li>Selecciona tu máquina → Configuración → Almacenamiento.</li>
            <li>Haz clic en el ícono de CD → Seleccionar archivo de disco.</li>
            <li>Elige la ISO de Ubuntu descargada.</li>
        </ul>
          <img src="V5.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

        <h2>4️⃣ Iniciar la instalación</h2>
        <ul>
            <li>Haz clic en <strong>Iniciar</strong> en VirtualBox.</li>
            <li>Selecciona “Try or Install Ubuntu” → luego <strong>Instalar Ubuntu</strong>.</li>
            <li>Configura idioma, teclado y zona horaria.</li>
            <li>Tipo de instalación: Normal.</li>
            <li>Elige “Borrar disco e instalar Ubuntu” (solo afecta el disco virtual).</li>
            <li>Crea tu usuario y contraseña.</li>
        </ul>
          <img src="V6.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
            <img src="V7.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

        <h2>5️⃣ Finalizar</h2>
        <ul>
            <li>Espera a que copie archivos (10–20 min).</li>
            <li>Reinicia la máquina virtual.</li>
            <li>Inicia sesión y ¡listo!, ya tienes Ubuntu funcionando en VirtualBox.</li>
        </ul>
          <img src="V8.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
          <img src="V9.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
         <img src="V10.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Instalación de Windows en Oracle VM VirtualBox</title>
</head>
<body>
  <h1>Pasos para Instalar Windows en Oracle VM VirtualBox</h1>
  
  <ol>
    <li>Descargar e instalar <strong>Oracle VM VirtualBox</strong> desde la página oficial de Oracle.</li>
<img src="W1.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

    <li>Conseguir la <strong>imagen ISO de Windows</strong> (puede ser Windows 10 o 11).</li>
    <img src="W2.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

    <li>Abrir VirtualBox y hacer clic en <em>“Nueva”</em> para crear una máquina virtual.</li>
    <img src="W3.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Poner un nombre (ejemplo: Windows10), seleccionar el tipo <strong>Microsoft Windows</strong> y la versión (Windows 10/11 según corresponda).</li>
    <img src="w4.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Asignar la <strong>memoria RAM</strong> (mínimo 2 GB, recomendado 4 GB o más).</li>
    <img src="w5.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Crear un <strong>disco duro virtual</strong> (mínimo 30 GB, recomendado 50 GB).</li>
    <img src="w6.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Seleccionar el disco creado y entrar a <em>“Configuración &gt; Almacenamiento”</em>.</li>
    
    <li>En el apartado de <strong>Controlador IDE</strong>, añadir la imagen ISO de Windows.</li>
    <img src="w7.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Iniciar la máquina virtual: se abrirá el instalador de Windows.</li>
    <img src="w8.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="w9.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="w10.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Seguir los pasos del instalador: elegir idioma, aceptar licencia, seleccionar el disco y comenzar la instalación.</li>
    
    <li>Esperar a que termine la instalación y configurar usuario, contraseña y opciones iniciales.</li>
    <img src="w11.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="w12.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

  </ol>

</body>
</html>
<br><br><br><br>
