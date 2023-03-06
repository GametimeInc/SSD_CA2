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
    <h1>Come get me, human!</h1>
    <p class="lead">These animals are being kept by some kind souls, ready to return them to your loving arms!<br>Check and see if your buddy is here first. If not, contact us!<br><br>Found someone's pet? Contact us!</p>
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
                  <td class="right"><?php echo "€" . $pet['listPrice']; ?></td>
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