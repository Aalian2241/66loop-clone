<link rel="stylesheet" href="Projects.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	<link rel="stylesheet" href="Components/Landing Section/LandingPage.css">

<?php
  $gridItems = [
    [
      'src' => '../../Assets/php.png',
      'title' => 'Dream Education Services',
      "Country" => "Australia",
      "Industry"=>"Consultancy"
    ],
    [
        'src' => '../../Assets/php.png',
        'title' => 'Dream Education Services',
        "Country" => "Australia",
        "Industry"=>"Consultancy"
    ],
    [
        'src' => '../../Assets/php.png',
        'title' => 'Dream Education Services',
        "Country" => "Australia",
        "Industry"=>"Consultancy"
    ]
  ];

?>

<div >
  <div class="container">
      <div class="divider"></div>
        <div class="grid-container">
          <?php foreach ($gridItems as $item): ?>
            <div class="grid-item">

                <div class="image-container">
                    <img src="<?php echo $item['src'];?>">
                </div>
                <div class="Title"><?php echo $item['title']; ?></div>
                <a1 href="#" style="text-decoration:none;color:aqua;border-bottom: 2px aqua;">View More</a1>   
                <div class="info-container">
                    <div class="item1">Left element 1</div>
                    <div class="item2">Right element 1</div>
                    <div class="item3">Left element 2</div>
                    <div class="item4">Right element 2</div>
                </div>
           
            </div>
          <?php endforeach; ?>
        </div>
      </div>
</div>
