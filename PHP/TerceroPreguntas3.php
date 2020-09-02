<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE TIME</title>
    <link rel="stylesheet" href="../CSS/TerceroPreguntas3.css">
</head>
<body>
    

    <a class="Casita" href="../Tercero.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3Posbu-VKxU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <form action="TerceroPreguntas3.php" method="post">

    <div class="Preguntas">
         
        <p>1.What time is it? </p>
        
        <img src="../Imagenes/TerceroTaller3/uno.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="It’s  seven o’ clock" > It’s  seven o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="It’s  nine o’ clock" >	It’s  nine o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="It’s twelve o’ clock" > It’s twelve o’ clock
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.What time is it? </p>

        <img src="../Imagenes/TerceroTaller3/dos.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="It’s two o’ clock"> It’s two o’ clock 
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="It’s five o’ clock"> It’s five o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="It’s ten o’ clock"> It’s ten o’ clock
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.What time is it?</p>

        <img src="../Imagenes/TerceroTaller3/tres.png" alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="It’s one o’clock" > It’s one o’clock
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="It’s three o’ clock"> It’s three o’ clock
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="It’s six o’ clock"> It’s six o’ clock
            </label>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.What time is it? </p>
        <br>

        <img src="../Imagenes/TerceroTaller3/cuatro.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="It’s nine o’ clock"> It’s nine o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="It’s twelve o’ clock"> It’s twelve o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="It’s  five o’ clock"> It’s  five o’ clock
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.What time is it? </p>
        <br>
        
        <img src="../Imagenes/TerceroTaller3/cinco.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="It’s seven o’ clock"> It’s seven o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="It’s three o’ clock"> It’s three o’ clock
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Its’s nine o’ clock"> Its’s nine o’ clock
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
 
            if($Respuesta1=="It’s  seven o’ clock"){
                $Calificacion++;
            }
            
            if($Respuesta2== "It’s five o’ clock"){
                $Calificacion++;
            }
            
            if($Respuesta3== "It’s one o’clock"){
                $Calificacion++;
            }
            
            if($Respuesta4== "It’s nine o’ clock"){
                $Calificacion++;
            }
            
            if($Respuesta5== "It’s three o’ clock"){
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