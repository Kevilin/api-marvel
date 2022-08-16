<?php

error_reporting(E_ALL ^ E_WARNING);
//require 'controller/HeroisController.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Heróis favoritos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="card-group">
    <?php foreach ($listHerois as $heroi) : ?>

      <div class="card" style="width: 100%;">
        <img src="<?= $heroi->imagem ?>" class="card-img-top" alt="Imagem de <?= $heroi->nome ?>">
        <div class="card-body text-center">
          <h5 class="card-title">Herói: <?= $heroi->nome ?></h5>
          <p class="card-text"><?= $heroi->descricao ?></p>
        </div>
        <ul class="list-group list-group-flush">
          <h5 class="card-title text-center mt-3">Algumas histórias no qual <?= $heroi->nome ?> está presente:</h5>
          <?php foreach ($heroi->historias as $historia) : ?>
            <li class="list-group-item text-center border-0"><?= $historia ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

    <?php endforeach; ?>

  </div>
</body>

</html><?php /**PATH /home/kevilinrodrigues/Área de Trabalho/marvel/api-marvel/resources/views/welcome.blade.php ENDPATH**/ ?>