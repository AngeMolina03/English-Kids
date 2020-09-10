<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPLETE DIALOGES</title>
    <link rel="stylesheet" href="../CSS/CuartoPreguntas4.css">
</head>
<body>
    

    <a class="Casita" href="../Cuarto.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Preguntas">
        <img src="../Imagenes/CuartoTaller4/primera.jpg" alt="">
        
    </div>

    <form action="CuartoPreguntas4.php" method="post">

    <div class="Preguntas">
         
        <p>1. Where are you going?</p>
        <label>
            <input type="radio" name="Respuesta1" value="It's a few minutes after two" > It's a few minutes after two
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="I'm going to work" > I'm going to work 	
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="about two times a week" > about two times a week
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2. Are you ready for tomorrow? </p>
        <label>
            <input type="radio" name="Respuesta2" value="No, not yet"> No, not yet 
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="It's raining"> It's raining
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Yes, I like some of that"> Yes, I like some of that
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3. Do you have any hobbies?</p>
            <label>
                <input type="radio" name="Respuesta3" value="I like singing" > I like singing
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Yes, a little"> Yes, a little
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="I'll pay by credit card">I'll pay by credit card
            </label>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4. When did you travel by train? </p>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="I don't like trains"> I don't like trains
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="In Holland"> In Holland
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="This April"> This April
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5. What do you plan to do this Saturday? </p>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="I'm playing basketball"> I'm playing basketball
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="I plan to go to the concert"> I plan to go to the concert
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="You can decide"> You can decide
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
 
            if($Respuesta1=="I'm going to work"){
                $Calificacion++;
            }
            
            if($Respuesta2== "No, not yet"){
                $Calificacion++;
            }
            
            if($Respuesta3== "I like singing"){
                $Calificacion++;
            }
            
            if($Respuesta4== "This April"){
                $Calificacion++;
            }
            
            if($Respuesta5== "I plan to go to the concert"){
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