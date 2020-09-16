<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERB TO BE</title>
    <link rel="stylesheet" href="../CSS/CuartoPreguntas1.css">
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
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/i-3kGNbZUXE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <form action="CuartoPreguntas1.php" method="post">

    <div class="Preguntas">
         
        <p>1. He _________ a basketball player</p>
        
        <img src="../Imagenes/CuartoTaller1/primera.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Is" > Is
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Are" > Are 	
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Am" > Am
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2. I _________ a girl </p>

        <img src="../Imagenes/CuartoTaller1/segunda.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Are"> Are 
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Isn't"> Isn't
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Am"> Am
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. It _________ a cold day</p>

        <img src="../Imagenes/CuartoTaller1/Tercera.png" width="200" height="200" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Is" > Is
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Are"> Are
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Aren't"> Aren't
            </label>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4. They _________ from Brasil </p>
        <br>

        <img src="../Imagenes/CuartoTaller1/cuarta.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Is"> Is
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="There"> There
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Are"> Are
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. We _________ in the park </p>
        <br>
        
        <img src="../Imagenes/CuartoTaller1/quinta.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Is"> Is
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Who"> Who
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Are"> Are
        </label>
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
            <a href='javascript:Cerrar()'>x</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;
 
            if($Respuesta1=="Is"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Am"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Is"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Are"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Are"){
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