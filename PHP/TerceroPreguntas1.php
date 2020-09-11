<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opossites</title>
    <link rel="stylesheet" href="../CSS/TerceroPreguntas1.css">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Tercero.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HGeuA4iJ8vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="TerceroPreguntas1.php" method="post">

    <div class="Preguntas">
         
        <p>1.The opposite of day is… </p>
        
        <img src="../Imagenes/TerceroTaller1/Night.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Night" > Night
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Moon" > Moon
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Black" > Black
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.The  opposite of big is… </p>

        <img src="../Imagenes/TerceroTaller1/Little.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Mouse"> Mouse 
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Little"> Little
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Grand"> Grand
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.The opposite of  down is… </p>

        <img src="../Imagenes/TerceroTaller1/Up.jpg" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Up" > Up
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Next"> Next
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Infront"> Infront
            </label>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.The opposite of fast is… </p>
        <br>

        <img src="../Imagenes/TerceroTaller1/Slow.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Slow"> Slow
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Faster"> Faster
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Green"> Green
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.Complete the following sequence: </p>
        <br>
        
        <img src="../Imagenes/TerceroTaller1/Short.jpg" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Short"> Short
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Big"> Big
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Puerple"> Purple
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
 
            if($Respuesta1=="Night"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Little"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Up"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Slow"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Short"){
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