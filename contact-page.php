<?php include 'includes/header.php';?>

<main class="container">
  <h1>Contact us</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
<form method="POST" name="contactform" action="contact-form-handler.php"> 

<!--
  Form fields:
  Your Name* = name
  Country Code* = countryCode
  Phone Number* = number
  Email Address* = email
  Reason for contact (Lost Animal/Found Animal)* = reason
  Type of Animal* = typeOfAnimal
  Pet Name = petName
  Breed = breed
  Picture = image
  Message* = message
-->

<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name" required>
</p>

<p>
<label for='countryCode'>Phone Number:</label> 
<select name="countryCode" required>
  <option></option>
  <option value="roi">+353</option>
  <option value="ni">+44</option>
</select>
<input type="text" name="number"> <br>
</p>

<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="email"> <br>
</p>

<p>
<label for='reason'>Reason for contact:</label> <br>
<select name="reason">
  <option default value="none"></option>
  <option value="lostPet">Lost Pet</option>
  <option value="foundPet">Found Pet</option>
</select> <br>
</p>

<p>
<label for='typeOfAnimal'>Type Of Animal:</label> <br>
<input type="text" name="typeOfAnimal">
</p>

<p>
<label for='petName'>Pet's Name:</label> <br>
<input type="text" name="petName">
</p>

<p>
<label for='breed'>Pet's Breed:</label> <br>
<input type="text" name="breed">
</p>

<p>
<label for='image'>Picture of Pet:</label> <br>
<input type="file" name="image" accept="image/*">
</p>

<p>
<label for='message'>Message:</label> <br>
<textarea name="message"></textarea>
</p>

<input type="submit" value="Submit"><br>

</form>

</main><!-- /.container -->

<?php include 'includes/footer.php';?>