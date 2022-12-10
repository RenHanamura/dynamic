<?php

include ("conexion.php");
$link = conectar();
$sql1 = "select * from plants";
$query_a = mysqli_query($link,$sql1);

?>

<html>
<head>
    <title>Planteario</title>
</head>
<link rel = "stylesheet" href = "assets/css/Style sheet.css">
<header>
<div class="overlay">
<h1>Planteario UPT</h1>
<h3>Un pequeño proyecto el cual recolecta las plantas que estan dentro de la universclassad</h3>
<p>Muchas gracias al taller de ecologia por proporcionarnos la informacion de las plantas</p>
  <br>
  <button><a href="form.php">Agregar mas plantas</a></button>
    </div>
</header>
<body>
<?php
            while($row = mysqli_fetch_array($query_a)){
       ?>
<div class="card">
        <div class="flip-card">
            <a href="<?php echo $row['link']?>"><h2>
                Puchale aqui para ver mas
                <br><span>⏩</span>
            </h2></a>
        </div>
        <div class="img">
            <img src="<?php echo $row['img']?>">
        </div>
        <div class="tecsto">
            <div>
            <center><h1><b><i><?php echo $row['nombre_Com']?></i></b></h1></center>

            <p><b>Nombre cientifico:</b> <?php echo $row['nombre_Cien']?><br>
            Familia: <?php echo $row['familia']?><br>
            Lugar de origen: <?php echo $row['lugar_Origen']?><br>
            Caracteristicas: <?php echo $row['caract']?><br>
            Riesgo: <?php echo $row['riesgo']?></p>
            <span>Ver mas ⏩</span>  
            </div>


        </div>
    </div>
    <br>
            <?php
            }
            ?>
      </body>
</body>
</html>