<?php
require_once('includes/database.php');

// Get pets
$queryPets = 'SELECT * FROM foundpets';
$statement = $db->prepare($queryPets);
$statement->execute();
$pets = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Come get me, human!</h1>
    <p class="lead">These animals are being kept by some kind souls, ready to return them to your loving arms!<br>Check and see if your buddy is here first. If not, contact us!<br><br>Found someone's pet? Contact us!</p>
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