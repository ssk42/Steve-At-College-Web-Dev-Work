<?php
	
   if( is_uploaded_file($_FILES["Image"]["tmp_name"]) ) {
      $check = getimagesize($_FILES["Image"]["tmp_name"]);
      echo "File is an image-".$check["mime"].".";
  
     
   }
?>