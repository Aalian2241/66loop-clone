<link rel="stylesheet" href="News.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	<link rel="stylesheet" href="Components/Landing Section/LandingPage.css">

<?php
  $gridItems = [
    [
      'src' => '../../Assets/realestate.png',
      'title' => 'The Importance of a Mobile-Friendly Real Estate Website',
      'date' =>"66Loop  April 16, 2023",
      "description" => "In todays digital age, having a mobile-friendly real estate website is not just a recommendation but an absolute necessity. With more than 60% of internet",

    ],
    [
        'src' => '../../Assets/funnels.png',
        'title' => 'How To Use Funnels To Optimize Your Real Estate Website',
        'date' =>"66Loop  April 16, 2023",
        "description" => "In todays digital age, having a mobile-friendly real estate website is not just a recommendation but an absolute necessity. With more than 60% of internet",

    ],
    [
        'src' => '../../Assets/home-rental.png',
        'title' => 'How To Optimize Your Real Estate Website For Lead Generation?',
        'date' =>"66Loop  April 16, 2023",
        "description" => "In todays digital age, having a mobile-friendly real estate website is not just a recommendation but an absolute necessity. With more than 60% of internet",

    ]
  ];

?>


    
  <div class="custom-container">
  <div class="Section-Title">
        <h1>News and Events</h1>
    </div>
        <div class="grid-container">
          <?php foreach ($gridItems as $item): ?>
            <div class="grid-item">
                <a href="https://www.google.com">
                    <div class="image-container">
                        <img src="<?php echo $item['src'];?>">
                    </div>
                </a>
                <a style="text-decoration:none" href="#"><div class="title"><?php echo $item['title']; ?></div></a>
                
                <div class="date"><?php echo $item['date']; ?></div>
                <div class="description"><?php echo $item['description']; ?></div>

                <a href="#" style="color:aqua;border-bottom: 2px aqua;">Read Article</a>   
           
            </div>
          <?php endforeach; ?>
        </div>

  </div>
