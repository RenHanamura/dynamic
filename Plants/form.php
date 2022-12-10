<!DOCTYPE html>
<html>
<head>
	<title>Agregar planta</title>
</head>
<body>

  <h2>Agregar especie</h2>
  <form action="insert.php" method="POST">
    <label for="nombre_Com">Nombre comun:</label><br>
    <input type="text" id="nombre_Com" name="nombre_Com"><br>
    <label for="nombre_Cien">Nombre cientifico:</label><br>
    <input type="text" id="nombre_Cien" name="nombre_Cien"><br>
    <label for="familia">Familia:</label><br>
    <input type="text" id="familia" name="familia"><br>
    <label for="lugar_Origen">Lugar de origen:</label><br>
    <input type="text" id="lugar_Origen" name="lugar_Origen"><br>
    <label for="caract">Caracteristicas:</label><br>
    <input type="text" id="caract" name="caract"><br>
    <label for="riesgo">Riesgo:</label><br>
    <input type="text" id="riesgo" name="riesgo"><br>
    <label for="img">Imagen:</label><br>
    <input type="text" id="img" name="img"><br>
    <label for="link">Link:</label><br>
    <input type="text" id="link" name="link"><br><br>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>