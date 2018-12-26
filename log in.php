<?php $title="LOG IN"; ?>
<?php include 'partals/header.php'; ?>
<!DOCTYPE html>
<html>
<title>log in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="login.css">
<header class="bgimg" id="home">
<form action="#" name = "form">
    <div class="container">
        <input type="text" name="username" placeholder="Email address" required>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login" onclick="loginvalidation(username , password)">
    </div>
    <div class="container signup">
        <p>I have no account? <a href="sign%20up.php">Sign up</a></p>
    </div>
</form>
</header>
<script src = "validate.js">
</script>
</html>    