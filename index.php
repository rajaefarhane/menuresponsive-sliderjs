<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Menu responsive</title>
    <link rel="stylesheet" href="main.css">

          <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="slider.js"></script>
</head>

<body>
  <nav>
    <div class="toggle">

<img src="im1.png" class="menu" aria-hidden="true" id="menu1"/>

    </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.menu').click(function(){
        $('ul').toggleClass('active');
      })
    })
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.menu').click(function(){
        $('ul').toggleClass('active');
      })
    })


    <img src="image_01.jpg" id="menu1">

$("#men1").click(function(){
if($(this).attr("src")) == "im1.png")
$(this).attr("src") = "close.png";
else
$(this).attr("src") = "im1.png";
});

    </script>

</body>
</html>
