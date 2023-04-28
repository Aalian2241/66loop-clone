<!DOCTYPE html>
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

  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Projects.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	

  </head>

<div >
<div class="container">
    <div class="divider"></div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($gridItems as $item): ?>
            <div class="col">
                <div class="card h-100">
                    <div class="image-container">
                        <img src="<?php echo $item['src'];?>" class="card-img-top" alt="<?php echo $item['title'];?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['title']; ?></h5>
                        <a href="#" style="text-decoration:none;color:aqua;border-bottom: 2px aqua;">View More</a>
                        <div class="info-container">
                            <div class="item1">Left element 1</div>
                            <div class="item2">Right element 1</div>
                            <div class="item3">Left element 2</div>
                            <div class="item4">Right element 2</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</div>
