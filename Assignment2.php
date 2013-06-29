<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Assignment2</title>
</head>
<body>

<h3>Personal Information </h3>

<?php 

$chkErrors = FALSE;

if (isset($_POST['fName'])){
echo " please hit the back arrow and enter your name ";
$chkErrors= TRUE;
}

if (isset($_POST['lName'])){
echo " please hit the back arrow and enter your Last Name ";
$chkErrors = TRUE;
}

if (isset($_POST['city'])){
echo " please hit the back arrow and enter your city";
$chkErrors = TRUE;
}
if (isset($_POST['state'])){
echo " please hit the back arrow and enter your state";
$chkErrors= TRUE;
}

if (isset($_POST['zipCode'])){

echo " please hit the back arrow and enter your zipcode ";
$chkErrors= TRUE;
}
$fName = filter_input(INPUT_POST, "fName");
$lName = filter_input(INPUT_POST, "lName");
$city = filter_input(INPUT_POST, "city");
$state = filter_input(INPUT_POST, "state");
$zipCode = filter_input(INPUT_POST, "zipCode");

if($chkErrors == FALSE) {

echo <<<HERE
<h3> Hi there,  $fName $lName, <br /> so you live in $city,<br /> in the great state of $state.<br /> I hear the climate around $zipCode is great this time of year.
<br /> $fName, I hear that $state has alot to offer as far as recreation goes.<br />I hope that you have a great summer in $city. <br /></h3>
HERE;
}


?>

</body>
</html> 
