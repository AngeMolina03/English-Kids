<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past simple</title>
    <link rel="stylesheet" href="../CSS/QuintoPreguntas4.css">
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
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/0b4rsDuzThE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="QuintoPreguntas4.php" method="post">
         

    <div class="Preguntas">
         
        <p>1. She _____ sick yesterday </p>

        <img src="../Imagenes/QuintoTaller4/Sick.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Was" > Was
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Were" > Were
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
        
        <p>2. We _____ in a trouble </p>

        <img src="../Imagenes/QuintoTaller4/Trouble.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Was"> Was
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Were"> Were
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. He _____ in Jamaica last summer </p>

        <img src="../Imagenes/QuintoTaller4/Surf.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta3" value="Was" > Was
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Were"> Were
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta3"value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">

        <p>4. I _____ a good student </p>

        <img src="../Imagenes/QuintoTaller4/Good.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Was" > Was
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Were"> Were
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta4"value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. They ______ married </p>

        <img src="../Imagenes/QuintoTaller4/Break.jpg" class="Imagen" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Was" > Was
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Were"> Were
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

            if($Respuesta1=="Was"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Were"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Was"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Was"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Were"){
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