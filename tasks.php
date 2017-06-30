//////whoareyou.php//////////////////////


<form action="youare.php" method="post">
What is your name?<br/>
<input type="text" name="yourname">
<input type="submit" name="go">
</form>

//////youare.php//////////////////////
<?php
$yourname="";
if (isset($_POST['yourname'])) $yourname = $_POST['yourname'];
echo "hello " . $yourname;
?>



////////////////index.php////////////////////
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<a href="whoareyou.php">Who Are You</a>
<a href="youare.php">You Are</a>
<a href="mynameis.php">My Name</a>
<a href="today.php">Today</a>
<a href="newfile.php">A Loop</a>
<a href="doPostcode.php">Postcode</a>
<a href="calculator.php">Calculator</a>

</body>
</html>


////////////////mynameis.php//////////////////////
<?php
$myname="steve";
?>
<html>
<body>
<h1> My name is <?php echo $myname; ?></h1>
</body>
</html>


///////////////today.php//////////////////////////
<?php

$date = date("d/m/Y");
$time = date("H:i:s");
?>

<html>
<body>
<h2 style="background-color:yellow" >Todays date is <?php echo $date ?></h2>
<h2 style="background-color: green;color:white">The current time is <?php echo $time ?></h2>
</body>
</html>

/////////////newfile.php////////////////////////
<html>
<body>
<?php
//phpinfo(-1);
echo "hello there";
for ($i=0;$i<10;$i++)
{
	echo "*";
}
?>
</body>
</html>


////////////////doPostcode.php////////////////////

<?php
$postcode="";
if (isset($_POST['postcode'])) $postcode = $_POST['postcode'];
if ($postcode!="")
{
	$url = "http://maps.google.com/?q=" . $postcode;
	header("Location: $url");
}
?>
<form method='post' action='doPostcode.php'>
<input type='text' name='postcode'/>
<input type='submit' value='Show Map'/>
</form>

////////////////calculator.php////////////////////

<?php
$valuea = "";
$valueb="";
$valuec="";
if (isset($_POST['valuea'])) $valuea = $_POST['valuea'];
if (isset($_POST['valueb'])) $valueb = $_POST['valueb'];
$answer = $valuea * $valueb;
?>

<form method='post' action='calculator.php'>

<h1>Calculator</h1>

Pick a Number:<br/><input type='text' name='valuea' value="<?php echo $valuea ?>"/><br/><br/>

Multiply by This Number:<br/><input type='text' name='valueb' value="<?php echo $valueb ?>"/><br/><br/>

		
Submit:<br/><input type='submit' value='Calculate'/><br/><br/>


The answer is:<br/>
<input type="text" value="<?php echo round($answer)?>">

</form>
