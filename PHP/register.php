<?
echo '<link rel="stylesheet" type="text/css" href="PHP Project.css">';
$FirstName = $_POST["FirstName"];
$Age = $_POST["Age"];
$LastName = $_POST["LastName"];
$EmailAddress = $_POST["EmailAddress"];


echo "<h1> Thank you for registering ".$FirstName." ".$LastName.".</h1>";
echo "<p> A confirmation email has been sent to ".$EmailAddress.". (But not really)</p>";
?>