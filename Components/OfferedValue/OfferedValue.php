<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="OfferedValue.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<?php
  $gridItems = [
    [
        'src' => '../../Assets/php.png',
        'title' => 'Professional UI/UX',
        'description' => "66Loop technologies, a name of trust, commitment and reliability, is aiming towards supplying.",
    ],
    [
        'src' => '../../Assets/php.png',
        'title' => 'Certified Developers',
        'description' => "66Loop technologies, a name of trust, commitment and reliability, is aiming towards supplying.",
    ],
    [
        'src' => '../../Assets/php.png',
        'title' => 'Fastest Turn-Around Time',
        'description' => "66Loop technologies, a name of trust, commitment and reliability, is aiming towards supplying.",
    ],
    [
        'src' => '../../Assets/php.png',
        'title' => '24/7 Post Project Support',
        'description' => "66Loop technologies, a name of trust, commitment and reliability, is aiming towards supplying.",
    ],

  ];

?>

<div class="component">
  <div class="Section-Title">
      <h1>What you'll get from hiring Us</h1>

  <div class="grid-container">
    <div class="grid1">
    <?php foreach ($gridItems as $item): ?>
      <div class="grid-item">
          <img src="<?php echo $item['src'];?>">
          <div>
              <div class="title"><?php echo $item['title']; ?></div>
          </div>

          <div>
              <div class="description"><?php echo $item['description']; ?></div>
          </div>
      </div>
    <?php endforeach; ?>
    </div>

    <div class="grid2">
      <img src="../../Assets/offeredValue.png">
    </div>
  </div>
  </div>
</div>
