//Write a simple PHP program to check that emails are valid.<DOCTYPE! html>
<html>
<form method="post">
    <a>Input email</a>
    <input type="text" name="email">
    <input type="submit">
</form>
</html>
<?php
if(isset($_POST["email"]))
{
    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address.");
} else {
  echo("$email is not a valid email address.");
}
}

?>