<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Routins</title>
    <link rel="stylesheet" href="../CSS/SegundoPreguntas1.css">
</head>
<body>
    
    <a class="Casita" href="../Segundo.html"></a>

<div class="Bienvenida">
        
        <h1>
            <br>
            <br>
            
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zzdz7mDW0eI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="SegundoPreguntas1.php" method="post">


    <div class="Preguntas">
         
         
         <img src="../Imagenes/SegundoTaller1/DailyRoutins.jpg" class="Imagen">
         <br>
 
     </div>

    <div class="Preguntas">
         
        <p>1.What is the first thing I do in the morning?</p>
        

        <label>
            <input type="radio" name="Respuesta1" value="Have dinner"> Have dinner
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Get up"> Get up
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Sawing work"> Sawing work
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.What thing I do before I have breakfast?</p>

        <label>
            <input type="radio" name="Respuesta2" value="Take a shower"> Take a shower
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Study at night"> Study at night
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Go to bed"> Go to bed
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.What thing I do after study at night?</p>

        <label>
            <input type="radio" name="Respuesta3" value="Have dinner"> Have dinner
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Brush my teeth"> Brush my teeth
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Get up"> Get up
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.What is the last thing I do? </p>
        
        <label>
            <input type="radio" name="Respuesta4" value="Sawing work"> Sawing work
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Go bed"> Go bed
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Get up"> Get up
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.What thing I do after sawing work? </p>

        <label>
            <input type="radio" name="Respuesta5" value="Have breakfast"> Have breakfast
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Have dinner"> Have dinner
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Take a shower"> Take a shower
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
            <a href='javascript:Cerrar()'>x</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;

            if($Respuesta1== "Get up"){
                $Calificacion++;
            }

            if($Respuesta2== "Take a shower"){
                $Calificacion++;
            }

            if($Respuesta3== "Brush my teeth"){
                $Calificacion++;
            }

            if($Respuesta4== "Go bed"){
                $Calificacion++;
            }

            if($Respuesta5== "Have breakfast"){
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