<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Problems</title>
    <link rel="stylesheet" href="../CSS/QuintoPreguntas1.css">
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
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5xZYFPJ0fps" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="QuintoPreguntas1.php" method="post">

    <div class="Preguntas">
         
        <img src="../Imagenes/QuintoTaller1/Fever.jpg" class="Imagen" alt="">
        <br>
        <p>1. He had... </p>
        <br>

        <label>
            <input type="radio" name="Respuesta1" value="Fever" > Fever
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Toothache" > Toothache
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Stomachache" > Stomachache
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
        
        <img src="../Imagenes/QuintoTaller1/Cold.jpg" class="Imagen2" alt="">
        <br>
        <p>2. He feels...</p>
        <br>

        <label>
            <input type="radio" name="Respuesta2" value="Cold"> Cold
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Fever"> Fever
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Headache"> Headache
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <img src="../Imagenes/QuintoTaller1/Dizzy.jpg" alt="">
        <br>
        <p>3. Nine feels...</p>
        <br>

            <label>
                <input type="radio" name="Respuesta3" value="Bruise" > Bruise
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Dizzy"> Dizzy
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Flue"> Flue
            </label>
            <label class="oculto">
                <input type="radio" name="Respuesta3" value="Vacio" checked>
            </label>

    </div>

    <div class="Preguntas">
    
        <img src="../Imagenes/QuintoTaller1/Stomachache.jpg" alt="">
        <br>
        <p>4. She had...</p>
        <br>

        <label>
            <input type="radio" name="Respuesta4" value="A broken hand"> A broken hand
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Stomachache"> Stomachache
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Measles"> Measles
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <img src="../Imagenes/QuintoTaller1/Toothache.jpg" alt="">
        <br>
        <p>5. She had... </p>
        <br>

        <label>
            <input type="radio" name="Respuesta5" value="Toothache"> Toothache
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="A cut"> A cut
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="A runny nose"> A runny nose
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

            if($Respuesta1=="Fever"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Cold"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Dizzy"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Stomachache"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Toothache"){
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