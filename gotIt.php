<?php
    $filename = "SaveInfo.csv";
    $isItExisting = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "Thank you ". $_POST['name'] . " for submitting your information.\n";	//EMail message
	$stringToAdd="";										//File information

	if (!$isItExisting){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";							//Make the column headings, comma after name for csv file 
		}							
		$stringToAdd.="\n";									//Make sure file goes to next line
		fwrite($handle, $stringToAdd);						//Write the 
	}
	
	$stringToAdd="";										//Reset the file info to blank
	foreach($_POST as $name => $value){
		print "$name : $value <br/>";						//This is going to the screen, double quotes expand variable if you used single here it would print $name
		$msg .="$name : $value\n";							//This is going to the email
		$stringToAdd.="$value,";							//This is going to the file, you just want the values in the cells, and comma again for cvs
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);

	//now close the file
	fclose($handle); 


	$to = $_POST["email"];										//next two lines are optional for email to look better 
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	
	mail($to, 'Form Data', $msg,$headers);						//mail is the function, you need a variable of where its going to afterwards (or hard code)

	echo "Email sent";
?>

<!-- 	if (!is_array($value)){
 -->		