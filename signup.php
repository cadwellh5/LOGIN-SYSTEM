<?php
include 'header.php';
?>
  <?php
    if(isset($_SESSION['id']))
    {
         echo $_SESSION['id'];
    }
else
{
    echo "you are not logged in";
    
}
?>
    
    <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"><br>
         <input type="text" name="last" placeholder="lastname"><br>
         <input type="text" name="uid" placeholder="username"><br>
         <input type="password" name="pwd" placeholder="Password"><br>
        <button type="submit">SIGN UP</button><br>
    </form  >
    
    
    </body>
</html> 