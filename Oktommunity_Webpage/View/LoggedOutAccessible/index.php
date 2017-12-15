<?php session_start();
      $_SESSION['email'] = 'User';
?>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/View/stylesheet.css'>
    </head>
    <body style="background-image: url('/Images/Signup.JPG'); ">
        
        <?php include('logged_out_header.php')?>
        
        <div class='main'>
        <h1 class="main">ABOUT US </h1>
        <p>Hello there, we here at Oktommunity are a platform on which you may either buy tickets to attend events or host your own! <br> This is mainly for 
            Oktoberfest so then will be the hottest time to attend events however there are beer festivals all year round <br> so come along fill up a stein and 
        enjoy!!!</p>
      
        </div>
        <div class='sidebar'>
            <h2 class='sidebar'>WHAT's <br>ON?</h2>
            <?php   include $_SERVER['DOCUMENT_ROOT'].'/Controller/connect.php';
                    include $_SERVER['DOCUMENT_ROOT'].'/Controller/events_upcoming.php'; ?>
        </div>
        <div class="gallery">
        <a target="_blank" href="https://d49r1np2lhhxv.cloudfront.net/www/photos/FreeFestival2017_V1.jpg">
            <img src="https://d49r1np2lhhxv.cloudfront.net/www/photos/FreeFestival2017_V1.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="http://tong.visitkorea.or.kr/cms/resource_etc/89/2478889_image_27.jpg">
    <img src="http://tong.visitkorea.or.kr/cms/resource_etc/89/2478889_image_27.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://media.timeout.com/images/103146122/image.jpg">
    <img src="https://media.timeout.com/images/103146122/image.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://www.kefken.org/wp-content/uploads/2016/03/summer_breeze_concert_long_beach.jpg">
    <img src="http://www.kefken.org/wp-content/uploads/2016/03/summer_breeze_concert_long_beach.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
                <div class="gallery">
  <a target="_blank" href="https://eng.taiwan.net.tw/userfiles/image/2016photo_en/2016_p01.jpg">
    <img src="https://eng.taiwan.net.tw/userfiles/image/2016photo_en/2016_p01.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
                <div class="gallery">
  <a target="_blank" href="http://www.festivalrepublic.com/sites/live.inviqa.festivalrepublic.com/files/images/news/2017_readingfestival_jenoneill_0178_2.jpg">
    <img src="http://www.festivalrepublic.com/sites/live.inviqa.festivalrepublic.com/files/images/news/2017_readingfestival_jenoneill_0178_2.jpg"  width="500" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

    </body>
</html>


