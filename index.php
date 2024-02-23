<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
	<?php include 'menu.php'; ?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imges/child.jpg"  width=50px; class="d-block w-100" alt="Future Edication">
    </div>
    <div class="carousel-item">
      <img src="imges/jkl.jpeg"  width=50px; class="d-block w-100" alt="Future Edication">
    </div>
    <div class="carousel-item">
      <img src="imges/opl.jpg"  width=50px; class="d-block w-100" alt="Future Edication">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5"> 
	<div class="py-5">
		<h3 class="text-center"> About Us</h3>
	</div>
	<div class="container-fluid">
	   <div class="row"> 
         <div class="col-lg-6 col-md-6 col-12">
         	<img src="imges/guru.jpg" class="img-fluid aboutimg">
         </div>
         <div class="col-lg-6 col-md-6 col-10">
         	<h4> future Education </h4>
         	<p>On top of hitting centuries, Kohli and Rahul broke a lot of records while helping India achieve 356/2 in 50 overs. Kohli became the fastest to reach 13,000 ODI runs and the pair smashed the highest ever partnership in Asia Cup history.</p>
          <a href="about.php">check more </a>
         </div>
     </div>

	</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="imges/Maharana pratap2.jpg" width="100px;" alt="Card image" >
 <div class="card-body">
    <h4 class="card-title">CCC</h4>
    <p class="card-text">This Course is govt.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
   <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="imges/Maharana pratap2.jpg" width="100px;" alt="Card image" >
 <div class="card-body">
    <h4 class="card-title">Tally Prime With GST.</h4>
    <p class="card-text">This Course is govt.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
   <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="imges/Maharana pratap2.jpg" width="100px;" alt="Card image" >
 <div class="card-body">
    <h4 class="card-title">DTP</h4>
    <p class="card-text">This Course is govt.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
</div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Gellary</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="imges/images.jpg" class="img-fluid pb-3s">
      </div>
  </section>
  <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Enquriy</h2>
  </div>
  <div>
    <div class="w-50 me-center">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label>User Name</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Moblie</label>
        <input type="text" name="moblie" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment">
        </textarea>
      </div>
      <button type="submit" class="btn btn-success"> Submit </button>
    </form>
  </div>
</div>
</section>
<footer>
  <p class="p-3 bg bg-dark text-white"> Copyright © 2023. All rights reserved FutureEducationGroup.
  &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
  &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp   <a href="https://www.instagram.com/"><img src="imges/insta.jpg" width="20px" ml-auto>
  <a href="https://www.facebook.com/login/"><img src="imges/fb.png" width="20px" ml-auto>
    <a href="https://api.whatsapp.com/message/J525RVBVMYHPB1?autoload=1&app_absent=0"><img src="imges/whats.jpg" width="20px" ml-auto>
  </p>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>