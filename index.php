

<?php include 'includes/header.php';?>

<main class="container">

  <div class="starter-template text-center">
  <h1 class="mt-4">Pet lost it's way? We can help!</h1>

  <div id="carouselExample" class="carousel slide w-50">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagesuploadedf/CarouselA.jpg" class="d-block w-100" alt="something">
    </div>
    <div class="carousel-item">
      <img src="./imagesuploadedf/CarouselB.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagesuploadedf/CarouselC.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <p class="lead">We can be of service in either:</p>
    <ul id="indexButtons">
      <li><a class="nav-link btn btn-dark" aria-current="page" href="lost-pets.php">Finding your missing companion</a></li>
      <li><a class="nav-link btn btn-dark" aria-current="page" href="found-pets.php">Returning a missing pet in your care to it's rightful owner</a></li>
    </ul>
  </div>
  

</main><!-- /.container -->

<?php include 'includes/footer.php';?>