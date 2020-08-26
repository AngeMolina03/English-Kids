<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READING COMPREHENSION</title>
    <link rel="stylesheet" href="../CSS/TerceroPreguntas4.css">
</head>
<body>
    

    <a class="Casita" href="../Tercero.html"></a>

    <div class="Bienvenida">
        
        <h1>
            <br>
            <br>
        </h1>

    </div>

    <form action="TerceroPreguntas4.php" method="post">
    
    <div class="Preguntas">
        <p>Hello, my name is Alice and I have eight years old. I born in Barcelona, but I live is Canada since I was a baby. I like dancing and singing in my free time but what I like the most is going to the cinema with my friends. I don’t like pickles and  onions. I’m in third grade at school, my classmates and my teachers are so nice with me. There is always a lot of people around me. Also, I have a little brother called Mario and a cat called Blue.</p>
        
        <img Class="A" src="../Imagenes/TerceroTaller4/Alice.jpg" alt="">
        
    </div>

    <div class="Preguntas">
         
        <p>1.Where does Alice live? </p>

        <label>
            <input type="radio" name="Respuesta1" value="Barcelona" > Barcelona
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Canada" > Canada
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta1" value="Argentina" > Argentina
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta1" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>2.What does Alice like to do the most? </p>

        <label>
            <input type="radio" name="Respuesta2" value="Dancing and singing"> Dancing and singing  
        </lab>
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Go to cinema"> Go to cinema
        </label> 
        <br>
        <label>
            <input type="radio" name="Respuesta2" value="Pickles and onions"> Pickles and onions
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta2" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>3.What grade is Alice in?</p>

            <label>
                <input type="radio" name="Respuesta3" value="First" > First
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Second"> Second
            </label>
            <br>
            <label>
                <input type="radio" name="Respuesta3" value="Third"> Third
            </label>
            <label class="oculto">
            <input type="radio" name="Respuesta3" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>4.What grade is Alice in?</p>

        <label>
            <input type="radio" name="Respuesta4" value="Mario"> Mario
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Blue"> Blue
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta4" value="Baby"> Baby
        </label>
        <label class="oculto">
            <input type="radio" name="Respuesta4" value="Vacio" checked>
        </label>

    </div>

    <div class="Preguntas">
    
        <p>5.How old is Alice? </p>

        <label>
            <input type="radio" name="Respuesta5" value="Ten years old"> Ten years old
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Eight years old"> Eight years old
        </label>
        <br>
        <label>
            <input type="radio" name="Respuesta5" value="Five years old"> Five years old
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
 
            if($Respuesta1=="Canada"){
                $Calificacion++;
            }
            
            if($Respuesta2== "Go to cinema"){
                $Calificacion++;
            }
            
            if($Respuesta3== "Third"){
                $Calificacion++;
            }
            
            if($Respuesta4== "Blue"){
                $Calificacion++;
            }
            
            if($Respuesta5== "Eight years old"){
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