<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary</title>
    <link rel="stylesheet" href="../CSS/PrimeroPreguntas4.css">
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
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zIWjYSfy0PQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="PrimeroPreguntas4.php" method="post">

    <div class="Preguntas">
         
        <p>
            Escoge la primera letra de cada palabra <br><br>
            1.Complete with the letter
        </p>
        
        <img src="../Imagenes/PrimeroTaller4/Apple.jpg"class="Apple" alt="">
        <br>

        <p>___PPLE</p>

        <label>
            <input type="radio" name="Respuesta1" value="C"> C
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="A"> A
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="D"> D
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la primera letra de cada palabra <br><br>
            2.Complete with the letter
        </p>

        <img src="../Imagenes/PrimeroTaller4/Bee.jpg" alt="">
        <br>

        <p>___EE</p>

        <label>
            <input type="radio" name="Respuesta2" value="B"> B
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="W"> w
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="T"> T
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la primera letra de cada palabra <br><br>
            3.What animal is this? 
        </p>

        <img src="../Imagenes/PrimeroTaller4/Panda.jpg" alt="">
        <br>

        <p>___ANDA</p>

            <label>
                <input type="radio" name="Respuesta3" value="U"> U
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="P"> P
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="F"> F
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>


    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la primera letra de cada palabra <br><br>
            4.Complete with the letter 
        </p>
        
        <img src="../Imagenes/PrimeroTaller4/Goat.jpg" alt="">
        <br>
        
        <p>___OAT</p>

        <label>
            <input type="radio" name="Respuesta4" value="R"> R
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="S"> S
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="G"> G
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la primera letra de cada palabra <br><br>
            5.Complete with the letter
        </p>

        <img src="../Imagenes/PrimeroTaller4/Sheep.jpg" alt="">
        <br><br>

        <p>___HEEP</p>

        <label>
            <input type="radio" name="Respuesta5" value="P"> P
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="A"> A
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="S"> S
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

            if($Respuesta1== "A"){
                $Calificacion++;
            }

            if($Respuesta2== "B"){
                $Calificacion++;
            }

            if($Respuesta3== "P"){
                $Calificacion++;
            }

            if($Respuesta4== "G"){
                $Calificacion++;
            }

            if($Respuesta5== "S"){
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