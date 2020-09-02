<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects</title>
    <link rel="stylesheet" href="../CSS/SegundoPreguntas4.css">
</head>
<body>
    

    <a class="Casita" href="../Segundo.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <div class="Video">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/AS5nhKzaOqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <form action="SegundoPreguntas4.php" method="post">

    <div class="Preguntas">
         
        <p>1.What is this object? </p>
        
        <img src="../Imagenes/SegundoTaller4/Sharpener.png" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta1" value="Pencil" > Pencil
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Sharpener" > Sharpener
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Book" > Book
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.What is this object? </p>

        <img src="../Imagenes/SegundoTaller4/Book.png" class="Book" alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta2" value="Chair"> Chair
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Backpack"> Backpack
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Book"> Book
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.What is this object? </p>

        <img src="../Imagenes/SegundoTaller4/Pencil.jpg"  alt="">
        <br><br>

            <label>
                <input type="radio" name="Respuesta3" value="Pencil" > Pencil
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
    
        <p>4.What is this object? </p>
        <img src="../Imagenes/SegundoTaller4/Eraser.png"  alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta4" value="Pen"> Pen
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Pencilcase"> Pencilcase
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Eraser"> Eraser
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.What object is this? </p>
        <img src="../Imagenes/SegundoTaller4/Backpack.jpg" class="Backpack"  alt="">
        <br><br>

        <label>
            <input type="radio" name="Respuesta5" value="Backpack"> Backpack
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Table"> Table
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Notebook"> Notebook
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


            if($Respuesta1=="Sharpener"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Book"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Pencil"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Eraser"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Backpack"){
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