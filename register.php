<?php
  if(isset($_POST["submitButton"])){
    echo "From was submitted";
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Reeceflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
<div class="signInContainer">

    <div class="column">

        <div class="header">
            <h3>Sign Up</h3>
            <span>to continue to Reeceflix</span>
        </div>

        <form action="" method="POST">
            <input type="text" name="firstName" placeholder="First name" required>
            <input type="text" name="lastName" placeholder="Last name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="email" name="email2" placeholder="Confirm email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password2" placeholder="Confirm password" required>
            <input type="submit" name="submitButton" value="SUBMIT">
        </form>
    </div>
</div>
</body>
</html>