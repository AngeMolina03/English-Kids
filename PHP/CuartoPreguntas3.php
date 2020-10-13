<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAN-CAN'T</title>
    <link rel="stylesheet" href="../CSS/CuartoPreguntas3.css">
</head>
<body>
    
    |<div class="FondoImagen"></div>
    <a class="Casita" href="../Cuarto.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oCAZMW4jMX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <form action="CuartoPreguntas3.php" method="post">

    <div class="Preguntas">
        <img src="../Imagenes/CuartoTaller3/primera.png" alt="">
    </div>

    <div class="Preguntas">
         
        <p>1. Simon can't ride skateboard</p>
        <label>
            <input type="radio" name="Respuesta1" value="True" > True
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="False" > False 	
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2. Sarah can paint </p>
        <label>
            <input type="radio" name="Respuesta2" value="True"> True 
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="False"> False
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. Simon can't play basketball</p>
            <label>
                <input type="radio" name="Respuesta3" value="True" > True
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="False"> False
            </label>
            <br>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4. Sarah can sing </p>
        <label>
            <input type="radio" name="Respuesta4" value="True"> True        
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="False"> False
        </label>
        <br>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. Simon can play the guitar </p>
        <label>
            <input type="radio" name="Respuesta5" value="True"> True
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="False"> False
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
 
            if($Respuesta1=="True"){
                $Calificacion++;
            }
            
            if($Respuesta2== "True"){
                $Calificacion++;
            }
            
            if($Respuesta3== "False"){
                $Calificacion++;
            }
            
            if($Respuesta4== "True"){
                $Calificacion++;
            }
            
            if($Respuesta5== "False"){
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