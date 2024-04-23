<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="../CSS/EncabezadoInicio.css" rel="stylesheet" type="text/css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>CENTER</title>
        

    </head>
    <body>
        <header class="Encabezado">
            <a href="index.php" class="Logo">
                <img src="../IMAGENES/ImagenEncabezado/GAMER.jpg"alt="Logo de la compañia"/>
             
              
                
                <h2 class="NombreTienda">CENTER</h2></a>

            <nav class="OpcionesEncabezado">         
                <a style="font-size: 15px" href="#"  class="Inicio">Inicio</a>
                <a style="font-size: 15px" href="#" class="Comunidad">Comunidad</a>
             <a style="font-size: 15px" href="#" class="Preventa">Preventa</a>
                <a style="font-size: 15px" href="#"  class="Ofertas">Ofertas</a>
                <a style="font-size: 15px" href="#" class="Contacto">Contacto</a>
                <a style="font-size: 15px" href="#" class="Servicio al cliente">Servicio al cliente</a>
                <a style="font-size: 15px" href="#" class="Comunidad">Sobre nosotros</a>
                <a style="font-size: 15px" href="#"  class="InicioSesion">  
      <?php
                    // Verifica si el usuario ha iniciado sesión
                    if (isset($_SESSION['nombre'])) {
                        echo '<a style="font-size: 15px" href="#" class="InicioSesion">';
                        echo '<img src="Imagenes/InicioSesion.png"/><div>' . $_SESSION['nombre'] . '</div>';
                        echo '</a>';
                    } else {
                        echo '<a style="font-size: 15px" href="InicioSesion1.php" class="InicioSesion">';
                        echo '<img  src="../IMAGENES/ImagenEncabezado/InicioSesion.png"/><div >Mi Cuenta</div>';
                        echo '</a>';
                        
                    }
                    ?>
                    <a style="font-size: 15px" href="#" class="CarroCompra">
                        <img src="../IMAGENES/ImagenEncabezado/CarroCompra (2).png"  onmouseover="cargarSlideCarrito()" value="obtenerProductosEnCarrito"><div>Su Carrito</div> </a>
                    
                    
            </nav>
        </header>
       

        <div id="carritoContainer"></div>

        <script>
            function cerrarSesion() {
                window.location.href = 'InicioSesion1.php';
            }
        </script>

    </body>
</html>
