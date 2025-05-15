<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://unavatar.io/github/LeoDanielChan">
  <?php if (isset($data['styles'])): ?>
    <?php foreach($data['styles'] as $value): ?>
      <link rel="stylesheet" href="<?= __FILE__ . '/../app/resources/css/' . $value . '.css'?>">
    <?php endforeach; ?>
  <?php endif; ?>
  <title><?= $data['title'] ?></title>
</head>

<body>

