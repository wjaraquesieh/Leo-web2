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
/*  String  */
// connect strings
$a = "Hello";
$b = "World";
$c = $a . " " . $b;
echo $c;
echo "<br>";

/*  Arithmetic operator  */
echo 1 + 2;
echo "<br>";
echo 2 - 1;
echo "<br>";
echo 3 * 2;
echo "<br>";
echo 9 / 3;
echo "<br>";
echo 10 % 3;
echo "<br>";
echo 10 ** 3;
echo "<br>";

echo "<br>";
/*  Assignment operators  */
$d = 2;
echo $d;
echo "<br>";
$d += 3;
echo $d;
echo "<br>";

/*  Comparison operators  */
$e = "3";
$f = 3;
// ==
if ($e == $f) {
    echo $e . " is equal to " . $f;
}
echo "<br>";
// ===
if ($e === $f) {
    echo $e . " is equal to " . $f;
} else {
    echo $e . " is not equal to " . $f;
}

// and &&
// or ||

?>

</body>
</html>
