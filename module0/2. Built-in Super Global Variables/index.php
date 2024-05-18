<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. Variable & Datatype</title>
</head>
<body>

<?php
/*  print root path  */
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
/*  print current php path  */
echo $_SERVER["PHP_SELF"];
echo "<br>";
/*  print server name  */
echo $_SERVER["SERVER_NAME"];
/*  print request method  */
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
/*  get GET request param  */
echo $_GET["name"];
echo "<br>";
/*  get POST request param  */
echo $_POST["password"];
echo "<br>";
/*  get GET, POST, Cookie data of a request  */
echo $_REQUEST["name"];
echo "<br>";
/*  get file data inside a request  */
echo $_FILES["file.png"];
echo "<br>";
/*  get Cookie  */
$_COOKIE["name"] = "John Doe";
echo $_COOKIE["name"];
echo "<br>";
/*  get Session  */
$_SESSION["name"] = "John Doe";
echo $_SESSION["name"];
echo "<br>";
/*  get environment config  */
echo $_ENV["ROOT_USER_PASSWORD"];
echo "<br>";
/*  var_dump function  */
var_dump($_SERVER["HTTP_HOST"]);
?>

</body>
</html>
