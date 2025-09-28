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
<br><br><br><br><br><br><br><br>
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
        
        <br><br>
        
        
        <h3 class="mb-0">LINK DEL VIDEO EXAMEN</h3>
         <iframe 
        src="https://drive.google.com/file/d/1nRjVKLVOYXcLT4d1jkJU9ngfjX8qNyjx/preview" 
        width="640" 
        height="360" 
        frameborder="0" 
        allow="autoplay; encrypted-media" 
        allowfullscreen>
         </iframe>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
TAREA 1
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidores de Internet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4faff;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #005f99;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }
        h2 {
            color: #005f99;
        }
        img {
            max-width: 200px;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tarea 1: Servidores de Internet</h1>
    </header>

    <section>
        <h2>Servidor DNS</h2>
        <p>El servidor DNS traduce los nombres de dominio (como google.com) en direcciones IP que las computadoras utilizan para comunicarse en la red.</p>
        <img src="dns.jpeg" alt="Servidor DNS">
    </section>

    <section>
        <h2>Servidor WEB</h2>
        <p>El servidor web almacena y entrega páginas web a los usuarios a través de navegadores como Chrome o Firefox.</p>
        <img src="web.jpeg" alt="Servidor WEB">
    </section>

    <section>
        <h2>Servidor FTP</h2>
        <p>El servidor FTP permite transferir archivos entre computadoras a través de Internet de manera rápida y sencilla.</p>
        <img src="ftp.png" alt="Servidor FTP">
    </section>

    <section>
        <h2>Servidor DHCP</h2>
        <p>El servidor DHCP asigna automáticamente direcciones IP a los dispositivos dentro de una red, facilitando la conexión.</p>
        <img src="dhcp.png" alt="Servidor DHCP">
    </section>

    <section>
        <h2>Servidor de Correo electrónico</h2>
        <p>El servidor de correo gestiona el envío y la recepción de mensajes de correo electrónico en Internet.</p>
        <img src="correo.png" alt="Servidor de Correo">
    </section>

</body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Etiquetas HTML</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tarea 2: Página de ejemplos con etiquetas HTML</h1>
    <p>En esta página aprenderás para qué sirve cada etiqueta de HTML y verás un ejemplo de uso.</p>

    <hr>

    <!-- Ejemplos de etiquetas básicas -->
    <section>
        <h2>1. Encabezados &lt;h1&gt; a &lt;h6&gt;</h2>
        <p>Sirven para definir títulos con distintos niveles de importancia.</p>
        <h3>Ejemplo:</h3>
        <h4>Este es un encabezado h4</h4>
    </section>

    <section>
        <h2>2. Párrafo &lt;p&gt;</h2>
        <p>Sirve para escribir bloques de texto.</p>
        <h3>Ejemplo:</h3>
        <p>Este es un párrafo de ejemplo en HTML.</p>
    </section>

    <section>
        <h2>3. Enlaces &lt;a&gt;</h2>
        <p>Sirven para dirigir a otra página o recurso.</p>
        <h3>Ejemplo:</h3>
        <a href="https://www.google.com" target="_blank">Ir a Google</a>
    </section>

    <section>
        <h2>4. Imágenes &lt;img&gt;</h2>
        <p>Muestra imágenes en la página.</p>
        <h3>Ejemplo:</h3>
        <img src="image web.jpeg" alt="ejemplo">
    </section>

    <section>
        <h2>5. Listas &lt;ul&gt; y &lt;ol&gt;</h2>
        <p>Se usan para agrupar elementos en lista.</p>
        <h3>Ejemplo:</h3>
        <ul>
            <li>Elemento en lista no ordenada</li>
            <li>Otro elemento</li>
        </ul>
        <ol>
            <li>Primer paso</li>
            <li>Segundo paso</li>
        </ol>
    </section>

    <section>
        <h2>6. Tablas &lt;table&gt;</h2>
        <p>Se usan para mostrar información tabulada.</p>
        <h3>Ejemplo:</h3>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
            <tr>
                <td>Ana</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Juan</td>
                <td>22</td>
            </tr>
        </table>
    </section>

    <hr>

    <!-- 10 etiquetas nuevas -->
    <h2>Etiquetas nuevas</h2>

    <section>
        <h3>1. &lt;video&gt;</h3>
        <p>Permite insertar videos en la página.</p>
        <video controls width="300">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
    </section>

    <section>
        <h3>2. &lt;audio&gt;</h3>
        <p>Permite reproducir audio.</p>
        <audio controls>
            <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
        </audio>
    </section>

    <section>
        <h3>3. &lt;canvas&gt;</h3>
        <p>Se usa para dibujar gráficos dinámicos con JavaScript.</p>
        <canvas id="miCanvas" width="200" height="100"></canvas>
        <script>
            let c = document.getElementById("miCanvas");
            let ctx = c.getContext("2d");
            ctx.fillStyle = "blue";
            ctx.fillRect(20, 20, 150, 60);
        </script>
    </section>

    <section>
        <h3>4. &lt;figure&gt; y &lt;figcaption&gt;</h3>
        <p>Se usan para asociar imágenes con descripciones.</p>
        <figure>
            <img src="caption.jpeg" alt="caption">
            <figcaption>Figura 1: Imagen con descripción.</figcaption>
        </figure>
    </section>

    <section>
        <h3>5. &lt;progress&gt;</h3>
        <p>Muestra el progreso de una tarea.</p>
        <progress value="60" max="100"></progress>
    </section>

    <section>
        <h3>6. &lt;meter&gt;</h3>
        <p>Muestra un valor dentro de un rango.</p>
        <meter value="0.6" min="0" max="1">60%</meter>
    </section>

    <section>
        <h3>7. &lt;details&gt; y &lt;summary&gt;</h3>
        <p>Permite crear secciones desplegables.</p>
        <details>
            <summary>Haz clic aquí</summary>
            <p>Este es el contenido oculto que aparece al desplegar.</p>
        </details>
    </section>

    <section>
        <h3>8. &lt;mark&gt;</h3>
        <p>Resalta texto importante.</p>
        <p>Ejemplo: HTML es <mark>muy importante</mark> en el desarrollo web.</p>
    </section>

   
</body>
</html>
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
    <img src="W4.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Asignar la <strong>memoria RAM</strong> (mínimo 2 GB, recomendado 4 GB o más).</li>
    <img src="W5.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Crear un <strong>disco duro virtual</strong> (mínimo 30 GB, recomendado 50 GB).</li>
    <img src="W6.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Seleccionar el disco creado y entrar a <em>“Configuración &gt; Almacenamiento”</em>.</li>
    
    <li>En el apartado de <strong>Controlador IDE</strong>, añadir la imagen ISO de Windows.</li>
    <img src="W7.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Iniciar la máquina virtual: se abrirá el instalador de Windows.</li>
    <img src="W8.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="W9.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="W10.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <li>Seguir los pasos del instalador: elegir idioma, aceptar licencia, seleccionar el disco y comenzar la instalación.</li>
    
    <li>Esperar a que termine la instalación y configurar usuario, contraseña y opciones iniciales.</li>
    <img src="W11.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
    <img src="W12.png" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">

  </ol>

</body>
</html>
<br><br><br><br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Voucher de Pago</title>
</head>
<body>
    <h1>Comprobante de Pago</h1>
    <img src="VOUCHER.jpg" alt="Imagen de prueba" class="img-fluid mt-3" style="width: 600px; height: auto;">
</body>
</html>