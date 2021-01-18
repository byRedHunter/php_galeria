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
      <h1 class="titulo">Subir Foto</h1>
    </div>
  </header>

  <div class="contenedor">
    <form class="formulario" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <label for="foto">Selecciona tu foto</label>
      <input type="file" name="foto" id="foto">

      <label for="titulo">Titulo de la foto</label>
      <input type="text" name="titulo" id="titulo">


      <label for="texto">Descripción de la foto</label>
      <textarea name="texto" id="texto"></textarea>

      <?php if(isset($error)): ?>
      <p class="error"><?php echo $error; ?></p>
      <?php endif; ?>

      <button class="button">Guardar Foto</button>
    </form>
  </div>
</body>

</html>