<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body
{
background-color:#FF00FF;
}
h1
{
color:orange;
text-align:center;
}
p
{
font-family:"Times New Roman";
font-size:20px;
}
h1 {text-align:center;
}
</style>
<title>Assignment3</title>
</head>
<body>

<h1>Personal Information </h1>

<?php 
$fName = filter_input(INPUT_POST, "fName");
$lName = filter_input(INPUT_POST, "lName");
$city = filter_input(INPUT_POST, "city");
$state = filter_input(INPUT_POST, "state");
$zipCode = filter_input(INPUT_POST, "zipCode");
$other = filter_input(INPUT_POST, "other");
$chkErrors = FALSE;


if(!empty($_POST['fName']) && isset($_POST['fName']))
{ 
$chkErrors = TRUE;
   
}
else
{
 echo '****FIRST NAME FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 

if(!empty($_POST['lName']) && isset($_POST['lName']))
{ 
$chkErrors = TRUE;
   
}
else
{
 echo '****LAST NAME FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 



if(!empty($_POST['city']) && isset($_POST['city']))
{
$chkErrors = TRUE;
   
}
else
{
 echo '****CITY FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 
if(!empty($_POST['state']) && isset($_POST['state']))
{$chkErrors = TRUE;
   
}
else
{
 echo '****STATE FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 

if(!empty($_POST['zipCode']) && isset($_POST['zipCode']))
{$chkErrors = TRUE;
   
}
else
{
 echo '****ZIPCODE FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 

if(!empty($_POST['other']) && isset($_POST['other']))
{ $chkErrors = TRUE;
   
}

else
{
  echo '****TEXT FIELD REQUIRED*****';
  echo "<br> <a href='Assignment3.html'>Go back to form</a>";
} 

if ($chkErrors == TRUE) {


echo <<<HERE
'<h3> Hi there,  $fName $lName, <br /> so you live in $city,<br /> in the great state of $state.<br /> I hear the climate around $zipCode is great this time of year.
<br /> $fName, I hear that $state has alot to offer as far as recreation goes.<br />      <img src="pup.jpg" width="200" height="175"
alt="Cute Puppy" />
I hope that you have a great summer in $city. $other <br /></h3>'
HERE;
}



?>

</body>
</html> 
