<?php include 'includes/header.php';?>


<main class="container">
  
<form class="starter-template text-center" method="POST" name="contactform" action="contact-form-handler.php"> 
<h1>Contact us</h1>
<!--
  Form fields:
  Your Name* = name
  Mobile Number* = number
  Email Address* = email
  Reason for contact (Lost Animal/Found Animal)* = reason
  Type of Animal* = typeOfAnimal
  Pet Name = petName
  Breed = breed
  Picture = image
  Message* = message
-->


<p>
<label for='name'><span class="requireStar">*</span>Your Name:</label> 
<input type="text" name="name" id="name" onblur=nameValidation() placeholder="Letters only" pattern="^[a-zA-Z ]+$" required> <br>
<ul class="errorList" id="nameError"></ul>
</p>

<p>
<label for='number'><span class="requireStar">*</span>Mobile Number:</label> 
<input type="text" name="number" id="number" onblur=numberValidation() pattern="08[35679]\d{7}$" placeholder="IE # (e.g 0835921240)" required> <br>
<ul class="errorList" id="numberError"></ul>
</p>

<p>
<label for='email'><span class="requireStar">*</span>Email Address:</label> 
<input type="email" name="email" id="email" onblur=emailValidation() placeholder="example@gmail.com" required> <br> 
<!--Pattern attribute is not advised, use of type "email" is instead suggested-->
</p>

<p>
<label for='reason'><span class="requireStar">*</span>Reason for contact:</label> 
<select name="reason" id="reason" onchange=reasonValidation() required>
  <option value></option>
  <option value="lostPet">Lost Pet</option>
  <option value="foundPet">Found Pet</option>
</select>
<ul class="errorList" id="reasonError"></ul>

</p>

<p>
<label for='typeOfAnimal'><span class="requireStar">*</span>Type Of Animal:</label> 
<input type="text" name="typeOfAnimal" id="typeOfAnimal" onblur=typeValidation() placeholder="Cat? Dog? Squirrel?" pattern="^[a-zA-Z ]+$" required> <br>
<ul class="errorList" id="typeError"></ul>
</p>

<p>
<label for='petName'>Pet's Name:</label> 
<input type="text" name="petName" id="petName" onblur=petNameValidation() placeholder="Michi? Rufus? Sandy?" pattern="^[a-zA-Z ]+$"> <br>
<ul class="errorList" id="petNameError"></ul>
</p>

<p>
<label for='breed'>Pet's Breed:</label> 
<input type="text" name="breed" id="breed" onblur=breedValidation() placeholder="Dalmatian? Maine Coon?" pattern="^[a-zA-Z ]+$"> <br>
<ul class="errorList" id="breedError"></ul>
</p>

<p>
<label for='image'>Picture of Pet:</label> <br>
<input type="file" name="image" id="image" accept="image/*">
<span id="imageError"></span>
</p>

<p>
<label for='message'><span class="requireStar">*</span>Message:</label> <br>
<textarea onblur=messageValidation() name="message" id="message" placeholder="Give an informative message about the pet in question, and terms for someone reaching out to you!" required></textarea>
<ul class="errorList" id="messageError"></ul>
</p>

<input type="submit" value="Submit"><br>

</form>

</main><!-- /.container -->
<script src="js/validation.js"></script>
<?php include 'includes/footer.php';?>