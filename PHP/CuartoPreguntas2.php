<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOME-ANY</title>
    <link rel="stylesheet" href="../CSS/CuartoPreguntas2.css">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Cuarto.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zbQAIJK7chE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <form action="CuartoPreguntas2.php" method="post">

    <div class="Preguntas">
         
        <p>1. _________ of his travels were amazing</p>
        
        <img src="../Imagenes/CuartoTaller2/primera.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Any" > Any
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Some" > Some 	
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2. I don't like _________ of those shoes </p>

        <img src="../Imagenes/CuartoTaller2/Segunda.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Some"> Some 
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Any"> Any
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. I see _________ cats on my way home today</p>

        <img src="../Imagenes/CuartoTaller2/tercera.jpg" width="200" height="200" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Any" > Any
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="some"> some
            </label>
            <br>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4. I don't have _________ money </p>
        <br>

        <img src="../Imagenes/CuartoTaller2/cuarta.jpg" width="200" height="200" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Some"> Some
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Any"> Any
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. You spilled _________ milk </p>
        <br>
        
        <img src="../Imagenes/CuartoTaller2/quinta.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Any"> Any
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Some"> Some
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta5" value="Vacio" checked>
        </label>
    </div>
    
        <input type="submit" value="Calificar" name='Calificar' class="Calificar">


    </form>
        
        
    <?php
        
        if(isset($_POST['Calificar'])){
            echo "<div class='VentanaOpaca' id='VentanaOpaca'>";
            echo "<div class='BotonCalificar' id='VentanaCalificacion'>
            <a href='javascript:Cerrar()' Class='X' >X</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;
 
            if($Respuesta1=="Some"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Some"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Some"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Any"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Some"){
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