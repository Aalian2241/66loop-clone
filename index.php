<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=contain">
    <link rel="import" href="Components/Landing/LandingSection.html">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	
    <link rel="stylesheet" href="Components/Services/Services.css">
    <link rel="stylesheet" href="Components/Landing/LandingPage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .container-fluid {
      height: 100%;
    }
    .component {
      width: 100%;
      height:100%;
      border: none;
      margin: 0;
      padding: 0;
      display: block;
    }
    .divider {
      height: 1px;
      background-color: black;
    }
  </style>
</head>
<body>
    
  <div class="container-fluid">
    <!-- <object class="component" data="Components/Landing/LandingSection.html"></object> -->
    <!-- <object class="component" data="Components/Services/Services.html"></object> -->
    <!-- <object class="component" data="Components/Record/Record.php"></object> -->
    <!-- <object class="component" data="Components/TechStack/TechStack.php"></object> -->
    <!-- <object class="component" data="Components/OfferedValue/OfferedValue.php"></object> -->
    <!-- <object class="component" data="Components/ClientsResponse/ClientsResponse.html"></object> -->
    <!-- <object class="component" data="Components/Portfolio/Portfolio.html"></object> -->
    <!-- <object class="component" data="Components/Projects/Projects.php"></object> -->
    <object style="min-width: 100%;min-height: 101%;" class="component" data="Components/News/News.php"></object>
  <object class="component" data="Components/HireUs/HireUs.html"></object>
  <!-- <object class="component" data="Components/NewProjects/NewProjects.html"></object> -->
  <!-- <object class="component" data="Components/Contact/Contact.html"></object> -->
  <!-- <object class="component" data="Components/BottomSection/BottomSection.html"></object> -->
  </div>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
    <!-- <script>
  $(document).ready(function() {
    $('object').each(function() {
      var $obj = $(this);
      $obj.on('load', function() {
        var height = $(this.contentDocument).height();
        $obj.height(height);
      });
      if ($obj.get(0).contentDocument.readyState == 'complete') {
        $obj.trigger('load');
      }
    });
  });
</script> -->


    </html>
