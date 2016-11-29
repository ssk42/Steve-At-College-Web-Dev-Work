<!DOCTYPE html>
<html>
	<!--
	Turnin page example
	This page demonstrates a turnin form.
	The user can type in their personal info and turn in a fake homework assignment.
	-->
	<head>
		<title>Turnin Page</title>
	</head>
	
	<body>
<?php

// define variables and set to empty values 
$studentname = $id = $assignment = $email = $cheat = $code= " ";
$studentnameErr = $idErr = $assignmentErr = $emailErr = $cheatErr= $codeErr = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//your code goes here. 

	// check name
	$studentname = $_POST["studentname"];
	$id= $_POST["id"];
	$space = '/\s/';
		if (empty($studentname)||(!preg_match("/^[a-zA-Z]*^/", $studentname))||!(preg_match($space,$studentname))) {
    		$studentnameErr= 'Please enter a correct student name. ';
    	} 
    	
		else{
			$studentnameErr= "";
		}

	// check id
		if (($id.length<7)){
			$idErr= "Please enter a 7 digit id";
		}
		else{
			$idErr="";
		}

	//Check Email
		if (!preg_match("^[a-z]{2}\d{4}+(a|b)+@+(student\.)?+american+\.+edu^", $_POST["email"])) {
			$emailErr="Please enter a valid AU student email.";
		}
		else{
			$emailErr="";
		}
	//check assignnment
		if(!isset($_POST["assignment"])){
			$assignmentErr="Please choose an assignnment";
		}
		else{
			$assignmentErr="";
		}

	// check if a file has been uploaded and if the file name is hw1, hw2,
		if (empty($_FILES['code']['name'])){
		$codeErr="Please upload file";
		}
		else{
			$filename=basename($_FILES["code"]["name"]);
			
			if(!($filename=="hw1.txt"||"hw2.txt"||"hw3.txt")){
				$codeErr="it's wrong";
			}
			else{
				$codeErr="";
			}
		}
	// check cheating
		if (!isset($_POST["cheat"])) {
			$cheatErr="You are a cheater";
		}
		else{
			$cheatErr="";
			$cheat="You're not a cheater!";
		}
	// note you need to use $_FILES["fileToUpload"]["tmp_name"]
	// to access your file. 


	}
?>
<h1>CSC 435 Turnin</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

			<fieldset>
				<legend>Personal Information</legend>
				<div>
					Name: <input type="text" name="studentname" />
					
					<span class="error">* <?php echo $studentnameErr;?></span>
				</div>
				<div>
					Student id: <input type="text" name="id" maxlength="7" />
					<span class="error">* <?php echo $idErr;?></span>
				</div>

				<div>
					Student email: <input type="text" name="email"/>
					<span class="error">* <?php echo $emailErr;?></span>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Assignment Information</legend>
				<div>
					Assignment:
					<label><input type="radio" name="assignment" value="1" /> 1</label>
					<label><input type="radio" name="assignment" value="2" /> 2</label>
					<label><input type="radio" name="assignment" value="3" /> 3</label>
					<span class="error">* <?php echo $assignmentErr;?></span>
				</div>


				<div>
					Code:
					<input type="file" name="code" />
					<span class="error">* <?php echo $codeErr;?></span>
				</div>
			</fieldset>
			
			<div>
				<input type="checkbox" name="cheat" /> I promise I didn't cheat! <?php echo $cheatErr ?>
			</div>
			<input type="submit" />
		</form>

<?php
$postStudent = $_POST["studentname"];
$postID = $_POST["id"];
$postEmail = $_POST["email"];
$postAssignment = $_POST["assignment"];
echo "<h2>Your Input:</h2>";
echo $studentname;

echo "<br>";
echo $postID;
echo "<br>";
echo $postEmail;
echo "<br>";
echo $postAssignment;

echo $code;
echo "<br>";
echo $filename;
echo "<br>";
echo $cheat;
?>
</body>
</html>