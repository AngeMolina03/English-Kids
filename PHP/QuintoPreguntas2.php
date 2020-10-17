<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wh questions</title>
    <link rel="stylesheet" href="../CSS/QuintoPreguntas2.css">
    <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
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
         
         <img src="../Imagenes/QuintoTaller2/wh.jpg" width="750px" class="wh" alt="">
         
    </div>

    <div class="Preguntas">
         
        <p>
            Lee y elige el enunciado <br><br>
            1. We use <u>when</u>: 
        </p>

        <label>
            <input type="radio" name="Respuesta1" value="To talk about a number" > To talk about a number
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="To talk about a place" > To talk about a place
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="To talk about time" > To talk about time
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
        
        <p>
            Lee y elige el enunciado <br><br> 
            2. We use <u>who</u>: 
        </p>

        <label>
            <input type="radio" name="Respuesta2" value="To talk about a person"> To talk about a person
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="To talk about a thing or an action"> To talk about a thing or an action
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="To talk about time"> To talk about time
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Lee y elige el enunciado <br><br>
            3. We use <u>why</u>: 
        </p>

            <label>
                <input type="radio" name="Respuesta3" value="To talk about a reason something happened" > To talk about a reason something happened
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="To talk about a place"> To talk about a place
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="To talk about a way something is done"> To talk about a way something is done
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>

    </div>

    <div class="Preguntas">

        <p>
            Lee y elige el enunciado <br><br>
            4. We use <u>what</u>: 
        </p>

        <label>
            <input type="radio" name="Respuesta4" value="To talk about a thing or an action"> To talk about a thing or an action
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="To talk about a number"> To talk about a number
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="To talk about a place"> To talk about a place
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Lee y elige el enunciado <br><br>
            5. We use <u>where</u>: 
        </p>

        <label>
            <input type="radio" name="Respuesta5" value="To talk about a reason"> To talk about a reason
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="To talk about a place"> To talk about a place
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="To talk about a number"> To talk about a number
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

            if($Respuesta1=="To talk about time"){
                $Calificacion++;
            }
            
            if($Respuesta2== "To talk about a person"){
                $Calificacion++;
            }
            
            if($Respuesta3== "To talk about a reason something happened"){
                $Calificacion++;
            }
            
            if($Respuesta4== "To talk about a thing or an action"){
                $Calificacion++;
            }
            
            if($Respuesta5== "To talk about a place"){
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