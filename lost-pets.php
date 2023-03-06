<?php
require_once('includes/database.php');

// Get pets
$queryPets = 'SELECT * FROM lostpets';
$statement = $db->prepare($queryPets);
$statement->execute();
$pets = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1 class="mt-4">Wanted! Outlaws loose and running!</h1>
    <p class="lead">Our website is trusted by many to help return stray pets in Ireland.<br>Head over to the contact form to supply us with info about your pet, and we will get people looking in no time!<br><br>Think you have found someone's lost pet? Have a look at the boys and girls below and see if anyone matches!</p>
  </div>
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagesuploadedf/test.png" class="d-block w-100" alt="something">
    </div>
    <div class="carousel-item">
      <img src="./imagesuploadedf/test.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagesuploadedf/test.png" class="d-block w-100" alt="...">
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
  <section>
        <!-- display a table of products -->
        <div class="table-responsive">
          <table class="table table-striped">
              <tr>
                  <th>Type of Pet</th>
                  <th>Pet Name</th>
                  <th>Breed</th>
                  <th>Image</th>
                  <th>Owner Name</th>
                  <th>Mobile No.</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Date Added</th>
              </tr>

              <?php foreach ($pets as $pet) : ?>
              <tr>
                  <td><?php echo $pet['pet_type']; ?></td>
                  <td><?php echo $pet['pet_name']; ?></td>
                  <td><?php echo $pet['pet_breed']; ?></td>
                  <td><img class="petImage" src="./imagesuploadedf/<?php echo $pet['pet_image']; ?>"/></td>
                  <td><?php echo $pet['person_name']; ?></td>
                  <td><?php echo $pet['person_mobile']; ?></td>
                  <td><?php echo $pet['person_email']; ?></td>
                  <td><?php echo $pet['person_message']; ?></td>
                  <td><?php echo $pet['date_added']; ?></td>
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
    </section>
</main><!-- /.container -->

<?php include 'includes/footer.php';?>
