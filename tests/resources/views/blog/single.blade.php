<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Selamat datang brur</h1>
    <h2> {{ $blog }}</h2>
    <?php foreach ($users as $user): ?>
      <li>{{ $user }}</li>
    <?php endforeach; ?>
  </body>
</html>
