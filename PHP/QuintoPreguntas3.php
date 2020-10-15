<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular and Irregular verbs</title>
    <link rel="stylesheet" href="../CSS/QuintoPreguntas3.css">
    <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Quinto.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Zdmufwnsd_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="QuintoPreguntas3.php" method="post">
         

    <div class="Preguntas">
         
        <p>1. Awoke </p>

        <img src="../Imagenes/QuintoTaller3/Awoke.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Regular" > Regular
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Irregular" > Irregular
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
        
        <p>2. Created </p>

        <img src="../Imagenes/QuintoTaller3/Created.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Regular"> Regular
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Irregular"> Irregular
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. Knew </p>

        <img src="../Imagenes/QuintoTaller3/Knew.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta3" value="Regular" > Regular
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Irregular"> Irregular
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta3"value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">

        <p>4. Lost </p>

        <img src="../Imagenes/QuintoTaller3/Lost.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Regular" > Regular
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Irregular"> Irregular
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta4"value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. Cooked </p>

        <img src="../Imagenes/QuintoTaller3/Cooked.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Regular" > Regular
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Irregular"> Irregular
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta5"value="Vacio" checked>
        </label>
    </div>
    
        <input type="submit" value="Calificar" name='Calificar' class="Calificar">


    </form>
        
        
    <?php
        
        if(isset($_POST['Calificar'])){
            echo "<div class='VentanaOpaca' id='VentanaOpaca'>";
            echo "<div class='BotonCalificar' id='VentanaCalificacion'>
            <a href='javascript:Cerrar()' class='X' >X</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;

            if($Respuesta1=="Irregular"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Regular"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Irregular"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Irregular"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Regular"){
                $Calificacion++;
            }
            
            echo "<p class='ParrafoCalificacion' >Su calificación es $Calificacion</p>";
            echo "</div>";
            echo "</div>";
        }


    ?>

    <script src="../JS/CerrarCalificacion.js"></script>
    

</body>
</html>