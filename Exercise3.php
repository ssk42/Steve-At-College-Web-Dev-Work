<?php
   if (isset($_POST["City"])) {
      echo "Your favorite city is ".$_POST['City']. ".<br />";
   }
?>

<html>
   <body>
      <div>
      <form action = "second.php" method = "POST" enctype="multipart/form-data">
        Upload City Image: <input type = "file" name = "Image" />
         
         <input type = "submit" />
         
      </form>
      </div>
   </body>
</html>