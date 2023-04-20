<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="import" href="Components/Landing/LandingSection.html">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	<link rel="stylesheet" href="Components/Landing Section/LandingPage.css">
    <link rel="stylesheet" href="Components/Services/Services.css">
    <link rel="stylesheet" href="Components/Landing/LandingSection.css">
</head>
<body>
    <div class="container-fluid">
        <iframe id="my-iframe" src="Components/Landing/LandingSection.html" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
        <div class="divider"></div>
        <iframe src="Components/Services/Services.html" frameborder="0" scrolling="no" style="width: 100%;height:800px"></iframe>
        <iframe src="Components/Record/Record.php" frameborder="0" scrolling="no" style="width: 100%;height:600px"></iframe>
        <iframe src="Components/TechStack/TechStack.php" frameborder="0" scrolling="no" style="width: 100%;height:300px"></iframe>
        <iframe src="Components/OfferedValue/OfferedValue.php" frameborder="0" scrolling="no" style="width: 100%;height:700px"></iframe>
        <iframe src="Components/ClientsResponse/ClientsResponse.html" frameborder="0" scrolling="no" style="width: 100%;height:700px"></iframe>
        <iframe src="Components/Portfolio/Portfolio.html" frameborder="0" scrolling="no" style="width: 100%;height:900px"></iframe>
        <iframe src="Components/Projects/Projects.php" frameborder="0" scrolling="no" style="width: 100%;height:500px"></iframe>
    </div>
    <iframe src="Components/News/News.php" frameborder="0" scrolling="no" style="width: 100%;height:700px"></iframe>
    <iframe src="Components/HireUs/HireUs.html" frameborder="0" scrolling="no" style="width: 100%;height:700px"></iframe>
    <iframe src="Components/NewProjects/NewProjects.html" frameborder="0" scrolling="no" style="width: 100%;height:200px"></iframe>
    <iframe src="Components/Contact/Contact.html" frameborder="0" scrolling="no" style="width: 100%;height:400px"></iframe>
    <iframe src="Components/BottomSection/BottomSection.html" frameborder="0" scrolling="no" style="width: 100%;height:200px"></iframe>

    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
    <script>
    function resizeIframe() {
        var iframe = document.getElementById("my-iframe");
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
    window.onload = resizeIframe;
    </script>

    </html>
