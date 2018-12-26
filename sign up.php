<?php $title="sign up"; ?>
<?php include 'partals/header.php'; ?>
<!DOCTYPE html>
<html>
<title>log in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="signup.css">
<header class="bgimg" id="home">
  <form action="#" name = "form">
  <div class="container">
    <input type="text" placeholder="Enter full name" name="name" required><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" required><br>
    <input type="text" placeholder="Enter phone number" name="phone" required><br>
    <input type="text" placeholder="Enter address" name="address" required><br>
    <input type="submit" class="registerbtn" value="Register" onclick="signupvalidation(document.form.email , document.form.psw , document.form.pswrepeat , document.form.phone)">
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="log%20in.php">log in</a>.</p>
  </div>
</form>
</header>
<script src = "validate.js">
</script>
</html>