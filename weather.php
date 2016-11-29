<!DOCTYPE>
 
<html>
<head>
<title>Simple Array - Weather</title>
</head>
 
<body>
<h2>How's the weather?</h2>
 
<?php
$weather = array("rain","sunshine", "showers","clouds", "snow","sleet","windy" );
print("We have seen all kinds of weather, in the beginning of the month, we had ".$weather[4]."then yesterday morning, we had ".$weather[2].", later it becomes ".$weather[3].", in the evening, it started to ".$weather[4]. ".Today, we finally had" .$weather[1]);


?>
 
</body>
</html>