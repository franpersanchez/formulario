<!DOCTYPE html>
<html>
  <head>
    <title>Tarea 1 UD6</title>

    <style>
        .caja{
            margin: auto;
            width: 400px;
            padding: 25px ;
            margin-top:9em;
            text-align:right;
            box-shadow: 10px 10px 5px #888888;
            border: 2px solid black;
        }

        label {
            width: 200px;
            display: inline-block;
            text-align:right;
        }

        </style>
    
  </head>
  <body>
<div class="caja">

            <form action="accion.php" method="post">

                    <label> Calle:</label>      <input type="text" name="calle"><br>
                    <label> Número:</label>     <input type="text" name="numero"><br>
                    <label>Población: </label>  <input type="text" name="poblacion"><br>
                    <label>Pais: </label>       <input type="text" name="pais"><br>
                    <input type="submit">
            </form>


</div>




  </body>
</html>