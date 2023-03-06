<?php
require_once('includes/database.php');

// Get pets
$queryPets = 'SELECT * FROM pets';
$statement = $db->prepare($queryPets);
$statement->execute();
$pets = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Wanted! Outlaws loose and running!</h1>
    <p class="lead">Our website is trusted by many to help return stray pets in Ireland.<br>Head over to the contact form to supply us with info about your pet, and we will get people looking in no time!<br><br>Think you have found someone's lost pet? Have a look at the boys and girls below and see if anyone matches!</p>
  </div>
  <section>
        <!-- display a table of products -->
        <div class="table-responsive">
          <table class="table table-striped">
              <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Rating Out Of 5</th>
                  <th>Delete</th>
              </tr>

              <?php foreach ($pets as $pet) : ?>
              <tr>
                  <td><?php echo $pet['productCode']; ?></td>
                  <td><?php echo $pet['productName']; ?></td>
                  <td class="right"><?php echo $pet['listPrice']; ?></td>
                  <td><?php echo $pet['stock']; ?></td>
                  <td><?php echo $pet['ratingOf5']; ?></td>
                  <td><form action="delete_product.php" method="post">
                      <input type="hidden" name="product_id"
                            value="<?php echo $product['productID']; ?>">
                      <input id="deleteButton" type="submit" value="Delete">
                  </form></td>
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
    </section>
</main><!-- /.container -->

<?php include 'includes/footer.php';?>
