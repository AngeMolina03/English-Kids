<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wh questions</title>
    <link rel="stylesheet" href="../CSS/QuintoPreguntas2.css">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Quinto.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/rlh-XnGLtjo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="QuintoPreguntas2.php" method="post">

    <div class="Preguntas">
         
         <img src="../Imagenes/QuintoTaller2/Osito.jpg" class="Osito" alt="">
         
    </div>

    <div class="Preguntas">
         
        <p>1. We use <u>when</u>: </p>
        <br>

        <label>
            <input type="radio" name="Respuesta1" value="We talk about a number" > We talk about a number
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="We talk about a place" > We talk about a place
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="We talk about time" > We talk about time
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
        
        <p>2. He use <u>who</u>: </p>
        <br>

        <label>
            <input type="radio" name="Respuesta2" value="We talk about a person"> We talk about a person
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="We talk about a thing or an action"> We talk about a thing or an action
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="We talk about time"> We talk about time
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. We use <u>why</u>: </p>
        <br>

            <label>
                <input type="radio" name="Respuesta3" value="We talk about a reason something happened" > We talk about a reason something happened
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="We talk about a place"> We talk about a place
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="We talk about a way something is done"> We talk about a way something is done
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>

    </div>

    <div class="Preguntas">

        <p>4. We use <u>what</u>: </p>
        <br>

        <label>
            <input type="radio" name="Respuesta4" value="We talk about a thing or an action"> We talk about a thing or an action
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="We talk about a number"> We talk about a number
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="We talk about a place"> We talk about a place
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. We use <u>where</u>: </p>
        <br>

        <label>
            <input type="radio" name="Respuesta5" value="We talk about a reason"> We talk about a reason
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="We talk about a place"> We talk about a place
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="We talk about a number"> We talk about a number
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

            if($Respuesta1=="We talk about time"){
                $Calificacion++;
            }
            
            if($Respuesta2== "We talk about a person"){
                $Calificacion++;
            }
            
            if($Respuesta3== "We talk about a reason something haappened"){
                $Calificacion++;
            }
            
            if($Respuesta4== "We talk about a thing or an action"){
                $Calificacion++;
            }
            
            if($Respuesta5== "We talk about a place"){
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