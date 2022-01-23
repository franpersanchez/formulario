<html>
    <head>
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

      

        </style>
    </head>
<body>

<div class="caja">

Calle:      <?php echo $_POST["calle"]; ?><br>
Nº:         <?php echo $_POST["numero"]; ?> <br>
Poblacion:  <?php echo $_POST["poblacion"];?> <br>
Pais:       <?php echo $_POST["pais"]; ?> <br>


</div>



</body>
</html>