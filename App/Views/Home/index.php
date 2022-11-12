<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Hello <?= htmlspecialchars($name) ?></h1>
  <ul>
    <?php foreach($colors as $color) { ?>
      <li><?= htmlspecialchars($color) ?></li>
    <?php } ?>
  </ul>
</body>
</html>