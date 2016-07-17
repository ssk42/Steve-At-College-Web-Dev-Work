<?

// for ($i=1; $i < 6; $i++) { 
// 	print("<div>"."<img src= kittie".$i.".jpeg></div>");
// }

$num=0;
    		$num2=1;
    		print("<h1> The first twenty Fibonacci numbers:</h1>");
    		for ($i=0; $i < 20; $i++) { 
    			$Fibonacci= $num+$num2;
    			$num=$num2;
    			$num2=$Fibonacci;
    			print("$Fibonacci<br>");
    		};
?>