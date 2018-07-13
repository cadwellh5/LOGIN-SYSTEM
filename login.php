<?php
include 'header.php';
?>
    <form action="includes/login.inc.php" method="POST">
    
         <input type="text" name="uid" placeholder="uid"><br>
         <input type="password" name="pwd" placeholder="Password"><br>
        <button type="submit">LOGIN</button><br></form>
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
    
  s
    
    </body>
</html> 