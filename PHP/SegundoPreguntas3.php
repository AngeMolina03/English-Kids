<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN/ON/UNDER</title>
    <link rel="stylesheet" href="../CSS/SegundoPreguntas3.css">
    <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Segundo.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
            
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/niPyVnC6W5g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="SegundoPreguntas3.php" method="post">


    <div class="Preguntas">
         
        
        <p>Marca la opción correcta según la preposición de lugar y la posición del objeto</p>
        <br><br>
        <img src="../Imagenes/SegundoTaller3/In-On-Under.jpg" class="Imagen">
        
 
     </div>

    <div class="Preguntas">
         
        <p>1.Where is the computer?</p>
        

        <label>
            <input type="radio" name="Respuesta1" value="On the bed"> On the bed
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Under the bed"> Under the bed
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="In front of the bed"> In front of the bed
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.Where are the flowers?</p>

        <label>
            <input type="radio" name="Respuesta2" value="Next to the books"> Next to the books
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Through the books"> Through the books
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Under the books"> Under the books
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.Where is the stereo?</p>

        <label>
            <input type="radio" name="Respuesta3" value="Behind the chair"> Behind the chair
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="In front of the chair"> In front of the chair
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="On the chair"> On the chair
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.Where is the glass of coffee?</p>
        <br>
        
        <label>
            <input type="radio" name="Respuesta4" value="In the bed"> In the bed
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Under the bed"> Under the bed
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Around the bed"> Around the bed
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.Where is the pink note?</p>
        <br>

        <label>
            <input type="radio" name="Respuesta5" value="Around the red and the white note"> Around the red and the white note
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="On the red and the white note"> On the red and the white note
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Between the red and the white note"> Between the red and the white note
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta5" value="Vacio" checked>
        </label>

    </div>

        <input type="submit" value="Calificar" name='Calificar' class="Calificar">

    </form>

    <?php

        $Respuesta1 = "Vacio";
        $Respuesta2 = "Vacio";
        $Respuesta3 = "Vacio";
        $Respuesta4 = "Vacio";
        $Respuesta5 = "Vacio";

        if(isset($_POST['Calificar'])){
            echo "<div class='VentanaOpaca' id='VentanaOpaca'>";
            echo "<div class='BotonCalificar' id='VentanaCalificacion'>
            <a href='javascript:Cerrar()' class='X' >x</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;

            if($Respuesta1== "On the bed"){
                $Calificacion++;
            }

            if($Respuesta2== "Next to the books"){
                $Calificacion++;
            }

            if($Respuesta3== "Behind the chair"){
                $Calificacion++;
            }

            if($Respuesta4== "Under the bed"){
                $Calificacion++;
            }

            if($Respuesta5== "Between the red and the white note"){
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