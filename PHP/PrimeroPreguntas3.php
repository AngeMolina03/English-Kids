<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary</title>
    <link rel="stylesheet" href="../CSS/PrimeroPreguntas3.css">
</head>
<body>
    
    <a href="../Primero.html"></a>

<div class="Bienvenida">
        
        <h1>
            <br>
            <br>
            
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/lPgTdgvj_jc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="PrimeroPreguntas3.php" method="post">


    <div class="Preguntas">
         
         
         <img src="../Imagenes/PrimeroTaller3/Week.jpg" class="Imagen">
         <br>
 
     </div>

    <div class="Preguntas">
         
        <p>1.Miercoles in English is:</p>
        

        <label>
            <input type="radio" name="Respuesta1" value="Wednesday"> Wednesday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Sunday"> Sunday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Friday"> Friday
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.Lunes in English is:</p>

        <label>
            <input type="radio" name="Respuesta2" value="Thursday"> Thursday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Tuesday"> Tuesday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Monday"> Monday
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.Jueves in English is:</p>

        <label>
            <input type="radio" name="Respuesta3" value="Thursday"> Thursday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Friday"> Friday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Saturday"> Saturday
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.Sabado in English is: </p>
        <br>
        
        <label>
            <input type="radio" name="Respuesta4" value="Saturday"> Saturday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Thursday"> Thursday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Tuesday"> Tuesday
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.Viernes in English is: </p>
        <br>

        <label>
            <input type="radio" name="Respuesta5" value="Monday"> Monday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Friday"> Friday
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Saturday"> Saturday
        </label>

    </div>

        <input type="submit" value="Calificar" name='Calificar' class="Calificar">

    </form>

    <?php

        if(isset($_POST['Calificar'])){

            $Respuesta1 = $_POST['Respuesta1'];
            $Respuesta2 = $_POST['Respuesta2'];
            $Respuesta3 = $_POST['Respuesta3'];
            $Respuesta4 = $_POST['Respuesta4'];
            $Respuesta5 = $_POST['Respuesta5'];
            $Calificacion = 0;

            if($Respuesta1== "Wednesday"){
                $Calificacion++;
            }

            if($Respuesta2== "Monday"){
                $Calificacion++;
            }

            if($Respuesta3== "Thursday"){
                $Calificacion++;
            }

            if($Respuesta4== "Saturday"){
                $Calificacion++;
            }

            if($Respuesta5== "Friday"){
                $Calificacion++;
            }
            
            echo "Su calificación es $Calificacion";
            
        }


    ?>

</body>
</html>