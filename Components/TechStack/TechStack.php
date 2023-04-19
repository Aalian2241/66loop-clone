<link rel="stylesheet" href="TechStack.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	<link rel="stylesheet" href="Components/Landing Section/LandingPage.css">

<?php
  $gridItems = [
    [
      'src' => '../../Assets/php.png',
      'name' => 'PHP',
    ],
    [
      'src' => '../../Assets/nodejs.png',
      'name' => 'NodeJS',
    ],
    [
      'src' => '../../Assets/VueJS.png',
      'name' => 'VueJS',
    ],
    [
      'src' => '../../Assets/ReactJS.png',
      'name' => 'ReactJS',
    ],
    [
      'src' => '../../Assets/wordpress.png',
      'name' => 'WordPress',
    ],
    [
      'src' => '../../Assets/MySql.png',
      'name' => 'MySql',
    ],

    [
      'src' => '../../Assets/MongoDB.png',
      'name' => 'MongoDB',
    ],
  ];

?>

<div >
  <div class="container">
    <div class="title">
      <a style="font-size:40px">Our Technologies</a>
    </div>
      <div class="divider"></div>
        <div class="grid-container">
          <?php foreach ($gridItems as $item): ?>
            <div class="grid-item">
              <img src="<?php echo $item['src'];?>">
              <div class="description"><?php echo $item['name']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
</div>