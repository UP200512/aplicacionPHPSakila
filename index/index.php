<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseñador Juan Jose</title>
    <link rel="preload" href="../styles/normalize.css ?v=<?php echo (rand()); ?>" as="style"> <!--en esta parte estamos haciendp una pre-recarga de los estilos para mejorar el perfomance-->
    <link rel ="stylesheet" href="../styles/normalize.css ?v=<?php echo (rand()); ?>"> <!--A nuestra hoja de diseño le agregamos la normalizacion para que en todos los dispositivos se vea de la misma manera-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krub:wght@300;700&display=swap" >      
    <link rel="preload" href="../styles/stylesIndex.css ?v=<?php echo (rand()); ?>" as="style">
    <link rel="stylesheet" href="../styles/stylesIndex.css ?v=<?php echo (rand()); ?>">
    <link rel="stylesheet" href="../styles/headerStyles.css?v=<?php echo (rand()); ?>">
    <link rel="preload" href="../styles/headerStyles.css?v=<?php echo (rand()); ?>" as="style">
    </head>
<body>
    <!-- <header>
        <h1 class="titulo">Diseño importante de Juan Rojas  <span>Freelancer</span></h1>
    </header> -->
    <?php
        include "header.php";
    ?>
     <!--cierre de navegacion_principal contenedor-->
    
    <section class="hero">
        <div class="contenido-hero">
            
            <h2>Sakila</h2>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices-pc" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 5h6v14h-6z" />
                <path d="M12 9h10v7h-10z" />
                <path d="M14 19h6" />
                <path d="M17 16v3" />
                <path d="M6 13v.01" />
                <path d="M6 16v.01" />
                </svg>
                
            </div> <!--cierre de ubicacion-->

            
        </div><!--cierre de contenido-hero-->
    </section>

    <main class="contenedor sombra">
        <h2>Herramientas</h2>

        <div class="servicios">
            <section class="servicio">
                <h3>JavaScript</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />
                    <path d="M7.5 8h3v8l-2 -1" />
                    <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                    </svg>
                </div><!--fin de iconos-->
                <p>It has survived not only five centuries, 
                    but also the leap into electronic typesetting, 
                    remaining essentially unchanged. 
            </section>
            
            <section class="servicio">
                <h3>CSS</h3>
                <div class="iconos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />
                        <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                        </svg>
                </div><!--fin de iconos-->
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>       
            </section>
            
            <section class="servicio">
                <h3>PHP</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-php" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <ellipse cx="12" cy="12" rx="10" ry="9" />
                    <path d="M5.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                    <path d="M15.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                    <path d="M12 7.5l-1 5.5" />
                    <path d="M11.6 10h2.4l-.5 3" />
                    </svg>
                </div><!--fin de iconos-->
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>    
            </section>

        </div><!--cierre de servicios-->
        <div class="tablas">
        <section class="tabla">
        <h2>Tabla actors</h2>
        <br>
            <div class="imagen">
            <a href="../actor/index.php?v=<?php echo (rand()); ?>"><img src="../img/actor.jpg"></a> 
            </div>
        </section>
        <section class="tabla">
        <h2>Tabla film</h2>
        <br>
            <div class="imagen">
            <a href="../film/index.php?v=<?php echo (rand()); ?>"><img src="../img/film.jpg"></a> 
            </div>
        </section>
        <section class="tabla">
        <h2>Tabla language</h2>
        <br>
            <div class="imagen">
            <a href="../languages/index.php?v=<?php echo (rand()); ?>"><img src="../img/language.jpg"></a> 
            </div>
        </section>
        </div>
        <br>
        <br>
    </main><!--cierre de contenedor sombra-->

    <footer class="footer">
        <p>Todos los derecho de autores de Juan Jose Rojas Cornejo</p>
    </footer>
    
</body>
</html>