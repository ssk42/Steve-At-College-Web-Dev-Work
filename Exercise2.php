<?php
   if (isset($_POST["City"])) {
      echo "Your favorite city is ".$_POST['City']. ".<br />";
   }
?>

<html>
   <body>
      <div>
      <form action = "second.php" method = "POST">
        Enter City Name: <input type = "text" name = "City" />
         
         <input type = "submit" />
         
      </form>
      </div>
   </body>
</html>