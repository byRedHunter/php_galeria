<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria PHP</title>
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>
  <header>
    <div class="contenedor">
      <h1 class="titulo">Foto: <?php echo $foto['titulo'] ?></h1>
    </div>
  </header>

  <div class="contenedor">
    <div class="foto">
      <img class="modal" src="fotos/<?php echo $foto['imagen'] ?>" alt="">
      <p class="texto"><?php echo $foto['texto'] ?></p>
      <a href="index.php" class="button regresar">Regresar</a>
    </div>
  </div>
</body>

</html>