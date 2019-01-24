//Create a simple HTML form and accept the user name and display the name through PHP echo statement.<!DOCTYPE html>
<html>
    <form method="post">
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php 
         if (isset($_POST["name"]))
             {
                $name = $_POST["name"];
                echo "$name";         
             }
        
    ?>
</html>