<?php include 'includes/header.php';?>


<main class="container">
  
<form class="small-container" method="POST" name="contactform" action="contact-form-handler.php">
  
    <h1 class="mt-4 mb-4">Contact us</h1>
    <p>All fields with <span class="requireStar">* </span>are mandatory</p>
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
    <label for='name' class="form-label"><span class="requireStar">* </span>Your Name:</label> 
    <input type="text" class="form-control" name="name" id="name" onblur=nameValidation() placeholder="Letters only" pattern="^[A-Za-z ]{1,30}$" required> <br>
    <ul class="errorList" id="nameError"></ul>
    </p>
   <!--  ^[A-Za-z ]{1,30}$     NEW REGEX FOR DATABASE COOPERATION-->
    <p>
    <label for='number' class="form-label"><span class="requireStar">* </span>Mobile Number:</label> 
    <input type="text" class="form-control" name="number" id="number" onblur=numberValidation() pattern="08[35679]\d{7}$" placeholder="IE number (e.g 0835921240)" required> <br>
    <ul class="errorList" id="numberError"></ul>
    </p>

    <p>
    <label for='email'class="form-label" pattern="^[\s\S]{1,40}$"><span class="requireStar">* </span>Email Address:</label> 
    <input type="email" class="form-control"name="email" id="email" onblur=emailValidation() placeholder="example@gmail.com" required> <br> 
    <!--Pattern attribute is not advised, use of type "email" is instead suggested-->
    <ul class="errorList" id="emailError"></ul>
    </p>

    <p>
    <label for='reason' class="form-label" ><span class="requireStar">* </span>Reason for contact:</label> 
    <select name="reason" class="form-control" id="reason" onchange=reasonValidation() required>
      <option value></option>
      <option value="Lost Pet">Lost Pet</option>
      <option value="Found Pet">Found Pet</option>
    </select>
    <ul class="errorList" id="reasonError"></ul>

    </p>

    <p>
    <label for='typeOfAnimal' class="form-label" ><span class="requireStar">* </span>Type Of Animal:</label> 
    <input type="text" name="typeOfAnimal" class="form-control"id="typeOfAnimal" onblur=typeValidation() placeholder="Cat? Dog? Squirrel?" pattern="^[A-Za-z ]{1,30}$" required> <br>
    <ul class="errorList" id="typeError"></ul>
    </p>

    <p>
    <label for='petName' class="form-label" >Pet's Name:</label> 
    <input type="text" class="form-control" name="petName" id="petName" onblur=petNameValidation() placeholder="Michi? Rufus? Sandy?" pattern="^[A-Za-z ]{1,30}$"> <br>
    <ul class="errorList" id="petNameError"></ul>
    </p>

    <p>
    <label for='breed' class="form-label">Pet's Breed:</label> 
    <input type="text" class="form-control"name="breed" id="breed" onblur=breedValidation() placeholder="Dalmatian? Maine Coon?" pattern="^[A-Za-z ]{1,30}$"> <br>
    <ul class="errorList" id="breedError"></ul>
    </p>

    <p>

    <label for='image'class="form-label">Picture of Pet:</label> <br>
    <div id="imgContainer">
      <input type="file" name="image" class="form-control"id="image" accept="image/*" onchange=previewImage()>
      <img id="imagePreview"> 
    </div>
    </p>

    <p>
    <label for='message' class="form-label"><span class="requireStar">* </span>Message:</label> <br>
    <textarea onblur=messageValidation() name="message" class="form-control" id="message" placeholder="Give an informative message about the pet in question, and terms for someone reaching out to you!" pattern="^[\s\S]{1,3000}$" required></textarea>
    <ul class="errorList" id="messageError"></ul>
    </p>

    <input class="btn btn-primary" type="submit" value="Submit"><br>
  
</form>

</main><!-- /.container -->
<script src="js/validation.js"></script>
<script src="js/imgPreview.js"></script>
<?php include 'includes/footer.php';?>