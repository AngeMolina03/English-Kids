<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family</title>
    <link rel="stylesheet" href="../CSS/SegundoPreguntas2.css">
    <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
</head>
<body>
    
    <div class="FondoImagen"></div>
    <a class="Casita" href="../Segundo.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
            
        </h1>

    </div>

    <div class="Video">
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/FHaObkHEkHQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="SegundoPreguntas2.php" method="post">


    <div class="Preguntas">
         
         
         <img src="../Imagenes/SegundoTaller2/Family.jpg" class="Imagen">
         <br>
 
     </div>

    <div class="Preguntas">
         
        <p>
            Completa el enunciado con la palabra correcta <br><br>
            1.My mom's mom is my______
        </p>
        

        <label>
            <input type="radio" name="Respuesta1" value="Grandmother"> Grandmother
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Aunt"> Aunt
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Father"> Father
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Completa el enunciado con la palabra correcta <br><br>
            2.The other son of my parents is_____
        </p>

        <label>
            <input type="radio" name="Respuesta2" value="Uncle"> Uncle
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Brother"> Brother
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Sister"> Sister
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Completa el enunciado con la palabra correcta <br><br>
            3.The sister of my dad is my_______
        </p>

        <label>
            <input type="radio" name="Respuesta3" value="Aunt"> Aunt
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Uncle"> Uncle
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta3" value="Grandfather"> Grandfather
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Completa el enunciado con la palabra correcta <br><br>
            4.The son of my aunt is my____
        </p>
        <br>
        
        <label>
            <input type="radio" name="Respuesta4" value="Cousin"> Cousin
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Brother"> Brother
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Step brother"> Step brother
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>
            Completa el enunciado con la palabra correcta <br><br>
            5.The daughter of my sister is my_____
        </p>
        <br>

        <label>
            <input type="radio" name="Respuesta5" value="Niece"> Niece
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Nephew"> Nephew
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Grandchild"> Grandchild
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

            if($Respuesta1== "Grandmother"){
                $Calificacion++;
            }

            if($Respuesta2== "Brother"){
                $Calificacion++;
            }

            if($Respuesta3== "Aunt"){
                $Calificacion++;
            }

            if($Respuesta4== "Cousin"){
                $Calificacion++;
            }

            if($Respuesta5== "Niece"){
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