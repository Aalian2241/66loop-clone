<!DOCTYPE html>

<?php
  $gridItems = [
    [
      'title' => '10 Years',
      'description' => 'of market experience',
    ],
    [
      'title' => '9999+',
      'description' => 'lines of code',
    ],
    [
      'title' => '100+',
      'description' => 'Satisfied Clients',
    ],
    [
      'title' => '4 Years',
      'description' => 'average experience of developers',
    ],
    [
      'title' => '3 Years',
      'description' => 'average partnership',
    ],
    [
      'title' => '10+',
      'description' => 'Developers',
    ],
  ];

?>

<link rel="stylesheet" href="Record.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	


<div class="grid-container">
  <div class="grid1">
  <?php foreach ($gridItems as $item): ?>
    <div class="grid-item">
      <div class="title"><?php echo $item['title']; ?></div>
      <div class="description"><?php echo $item['description']; ?></div>
    </div>
  <?php endforeach; ?>
  </div>

  <div class="grid2">
    <img src="../../Assets/record.png">
  </div>
</div>