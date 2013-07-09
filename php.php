<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Assignment-7-PHP</title>
 <style type = "text/css">

#footer {font-size: small;
         text-align:center;
  clear:right;
         padding-bottom:20px;
}
body { 
background-image:url("infor.jpg");
 color: white;text-align:center  }
p {  color: yellow; text-align:center;}
</style>
</head>
<body>
<?PHP

$cust001 = array (
  "Name" => "Eden Riddlespur",
	"Address" => "102 Woodland Drive",
	"City" => "Smyrna",
	"State" => "Georgia"
);
$cust002 = array (
	"Name" => "DeAnna Riddlespur",
	"Address" => "103 Woodland Drive",
	"City" => "Atlanta",
	"State" => "Georgia"
);
$cust003 = array (
	"Name" => "Joshua Riddlespur",
	"Address" => "102 Endland Drive",
	"City" => "Columbus",
	"State" => "Ohio"
);
$cust004 = array (
	"Name" => "Aubrey Riddlespur",
	"Address" => "Smallland Drive",
	"City" => "Powell",
	"State" => "Ohio"
);

// prepare main array

$clients = array (
	"001" => $cust001,
	"002" => $cust002,
	"003" => $cust003,
	"004" => $cust004,
	);

// get the input	
$custNo = filter_input(INPUT_POST, "custNo");
$custInfo = filter_input(INPUT_POST, "custInfo");
$details = $clients[$custNo][$custInfo];
	
	print "<h3>Client Number is: ". $custNo. "<br />" . $custInfo. " is " . $details . ".</h3>";
	?>
	</body>
	</html>
	
	
