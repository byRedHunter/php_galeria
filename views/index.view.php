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
      <h1 class="titulo">Mi increible galeria con PHP y MySQL</h1>
    </div>
  </header>

  <section class="fotos">
    <div class="contenedor">
      <?php foreach($fotos as $foto): ?>
      <div class="thumb">
        <a href="foto.php?id=<?php echo $foto['id']; ?>">
          <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="paginacion">
    <div class="contenedor">
      <?php if ($pagina_actual > 1): ?>
      <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="button left"><span>👈</span> Anterior</a>
      <?php endif ?>

      <?php if ($total_paginas != $pagina_actual): ?>
      <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="button left">Siguiente <span>👉</span> </a>
      <?php endif ?>
      <!-- <a href="/" class="button left"><span>👈</span> Anterior</a>
      <a href="/" class="button left">Siguiente <span>👉</span> </a> -->
    </div>
  </section>
</body>

</html>