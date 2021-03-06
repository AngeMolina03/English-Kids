<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
    <link rel="stylesheet" href="../CSS/PrimeroPreguntas1.css">
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
    
        <iframe src="https://www.youtube.com/embed/b02Ojls1O14" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="PrimeroPreguntas1.php" method="post">

    <div class="Preguntas">
         
        <p>
            Escoge la opción correcta <br><br>
            1.What number is this?
        </p>
        
        <img src="../Imagenes/PrimerTaller/Two.gif" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Seven" > Seven
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Two" > Two
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Ten" > Ten
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la opción correcta <br><br>
            2.What number is this? 
        </p>

        <img src="../Imagenes/PrimerTaller/Five.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Nine"> Nine
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="One"> One
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Five"> Five
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Escoge la opción correcta <br><br>
            3.Nine means: 
        </p>

        <img src="../Imagenes/PrimerTaller/Nine.jpg" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Doce" > Doce
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Tres"> Tres
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Nueve"> Nueve
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>

    </div>
   
    <div class="Preguntas">
    
        <p>
            Completa la secuencia <br><br>
            4.Complete the following sequence: 
        </p>

        <label>One-two-three-four-five-______-seven</label>
        <br><br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Twelve"> Twelve
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Six"> Six
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Eight"> Eight
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Completa la secuencia <br><br>
            5.Complete the following sequence: 
        </p>
        
        <label>Eight-nine-_______eleven</label>
        <br><br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Sixteen"> Sixteen
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Ten"> Ten
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Seven"> Seven
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
            <a href='javascript:Cerrar()' class='X' >X</a>";

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;

            if($Respuesta1=="Two"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Five"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Nueve"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Six"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Ten"){
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