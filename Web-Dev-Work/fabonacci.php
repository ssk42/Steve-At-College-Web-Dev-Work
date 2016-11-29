<!DOCTYPE html>
<html>
  <head>
    <title>Fibonacci Sequence</title>
  </head>
  <body>
    <h1> The first twenty Fibonacci numbers:</h1>
    	<?=
    		$num=0;
        $num2=1;
        
        for ($i=0; $i < 20; $i++) { 
          $Fibonacci= $num+$num2;
          $num=$num2;
          $num2=$Fibonacci;
          print("<li>$Fibonacci</li>");
        };

		?>

  </body>
</html>