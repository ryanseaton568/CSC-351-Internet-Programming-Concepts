<?
echo '<link rel="stylesheet" type="text/css" href="PHP Project.css">';
$FirstName = $_POST["FirstName"];
$Age = $_POST["Age"];
$LastName = $_POST["LastName"];
$EmailAddress = $_POST["EmailAddress"];
$MailList = $_POST["MailList"];
$FavoriteSuperHero = $_POST["FavoriteSuperHero"];

echo "<h1> Thank you for registering ".$FirstName." ".$LastName.".</h1>";
echo "<p> A confirmation email has been sent to ".$EmailAddress.". (But not really)</p>";
echo "<p>Did you choose to sign up for our mail list: $MailList <p>";
echo "<p>Your favoite superhero is: $FavoriteSuperHero <p>";
?>