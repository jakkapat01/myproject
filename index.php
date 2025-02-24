<?php
session_start();


// ตรวจสอบสถานะการล็อกอิน
$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=account_circle" />
</head>
<body>
    <!-- navbar -->
    <header class="p-3 bg-dark text-white fixed-top">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpoF2Aol7AY3XKax3LuAbB-alssb5q9yU7Q&s" width="42" height=45" alt="Bootstrap Logo">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
              <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fmaps.app.goo.gl%2FyjSnb5ihmctrgTybA%3Fg_st%3Dic%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1jIIdKYdxqOx76aUR75WHs7omZCDnqM05Sk_-yz2lii2W4sjd4HZzd_Eg_aem_WIoJ3c6_IDM_ZEXJ6rfXaw&h=AT256bnohFT6182UAygkYY_BuTW5pI9EYhx544w-st9uaomErvtNZWp2YPLON3-kabtyFEqfGivoeNpFo2Dw9In0q5aPebefxs7RA1jjCEqrDAvXGbzZR8_9DV_e1MGLqPFubXk7uDs" class="nav-link px-2 text-white" target="_blank">Location</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
            <?php if ($is_logged_in):?>
              <div class="d-flex align-items-center justify-content-end me-1">
                <button type="button" class="btn btn-outline-light me-2" onclick="location.href='logout.php'">sign-out</button>
                <span class="material-symbols-outlined " style="font-size: 40px;">account_circle</span>
              </div>
            <?php else: ?>
              <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2" onclick="location.href='login.php'">sign-in</button>
                <button type="button" class="btn btn-warning" onclick="location.href='signup.php'">Sign-up</button>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </header>
    <!-- end navbar -->
    <!-- carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://scontent.fbkk12-4.fna.fbcdn.net/v/t39.30808-6/476312328_533143289778421_5087110663820519389_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=k-wrwle18x0Q7kNvgGyuAk-&_nc_zt=23&_nc_ht=scontent.fbkk12-4.fna&_nc_gid=AiZ4J3aIj1z0qCxQKVf4qWE&oh=00_AYAqdeM8uzNUcsxjaUdS0M2kQ3rBoJ451c9Y-VU8r1Q3sw&oe=67AEFD86" class="d-block w-100" alt="carousel-image">

            <div class="container">
              <div class="carousel-caption text-start">
                <h1 style="color:bisque;">Onzon bar & restaurants</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/474060194_522363784189705_8306108220205470999_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=uoezu-209YkQ7kNvgFImgsA&_nc_zt=23&_nc_ht=scontent-bkk1-1.xx&_nc_gid=A8E_VeUzfoiaSM7lpWo1AmQ&oh=00_AYAFxo1O8mns5NrmMWReGsMqpQr8LRiOwQMqQ2nHl3fu8w&oe=67BCA0FC" class="d-block w-100" alt="carousel-image">
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://scontent.fbkk12-2.fna.fbcdn.net/v/t39.30808-6/357203700_772212944723033_1553725359406289763_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_ohc=aLT5ke7m-XsQ7kNvgE3Od23&_nc_zt=23&_nc_ht=scontent.fbkk12-2.fna&_nc_gid=AizssMDDnqYGSYGBHXNGmqW&oh=00_AYDwWcIohDSmjl3BVqiEcQPf7exUVENGQxPKCswhbJb00g&oe=67AF15CB" class="d-block w-100" alt="carousel-image">
    
            <div class="container">
              <div class="carousel-caption text-end">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- end carousel -->
    <!-- card -->
    <div class="row align-items-md-stretch" style="background-color:#22252a;">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2 style="color:#FFFFFF;" >Booking</h2>
            <p>Where the Music is Loud, the Drinks are Strong, and the Memories Last!</p>
            <button class="btn btn-outline-secondary" type="button" style="color: #FFFFFF;"  onclick="location.href='booktable.php'">booking here</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2 style="color: #FFFFFF;">Location</h2>
            <p>Savor the Taste, Feel the Rhythm, Enjoy the Night.Good Vibes, Great Drinks, Best Nights!</p>
            <button class="btn btn-outline-secondary" type="button" style="color: #FFFFFF;" 
                onclick="window.open('https://maps.app.goo.gl/yjSnb5ihmctrgTybA?g_st=ic', '_blank')">
                Get Location
            </button>
          </div>
        </div>
      </div>
    <!-- end card -->
    <!-- footer -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2025 Company, Inc</p>
      </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>