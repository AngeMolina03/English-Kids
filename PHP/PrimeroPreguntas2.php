<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
    <link rel="stylesheet" href="../CSS/PrimeroPreguntas2.css">
    <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
</head>
<body>
    
<div class="FondoImagen"></div>
    <a class="Casita" href="../Primero.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
            
        </h1>

    </div>

    <div class="Video">
    
    <iframe src="https://www.youtube.com/embed/pUPM3DtK9so" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="PrimeroPreguntas2.php" method="post">

    <div class="Preguntas">
         
        <p>
            Marca la opción correcta para cada pregunta<br><br>
            1.What color is the dinosaur?
        </p>
        
        <img src="../Imagenes/PrimeroTaller2/Green.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Blue"> Blue
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Green"> Green
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Red"> Red
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Marca la opción correcta para cada pregunta <br><br>
            2.The pepper is _______
        </p>

        <img src="../Imagenes/PrimeroTaller2/Yellow.jpg" class="Yellow" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Llelow"> Llelow
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Yellow"> Yellow
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="White"> White
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>
    </div>

    <div class="Preguntas">
    
        <p>
            Marca la opción correcta para cada pregunta <br><br>
            3.What color is this? 
        </p>

        <img src="../Imagenes/PrimeroTaller2/Blue.jpg" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Blue"> Blue
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="White"> White
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Pink"> Pink
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Marca la opción correcta para cada pregunta <br><br>
            4.The strawberry is _______ 
        </p>
        <br>

        <img src="../Imagenes/PrimeroTaller2/Red.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Purple"> Purple
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Orange"> Orange
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Red"> Red
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Marca la opción correcta para cada pregunta <br><br>
            5.The horse is_________
        </p>
        <br>

        <img src="../Imagenes/PrimeroTaller2/Brown.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Brown"> Brown
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Black"> Black
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="White"> White
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

            if($Respuesta1== "Green"){
                $Calificacion++;
            }

            if($Respuesta2== "Yellow"){
                $Calificacion++;
            }

            if($Respuesta3== "Blue"){
                $Calificacion++;
            }

            if($Respuesta4== "Red"){
                $Calificacion++;
            }

            if($Respuesta5== "Brown"){
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