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

/*  if else  */
/*
if () {

} else if () {

}
*/

/*  switch case  */
$a = 1;
switch ($a) {
    case 1:
        echo "a == 1";
        break;
    case 2:
        echo "a == 2";
        break;
    default:
        echo "a != 1 && a != 2";
        break;
}

echo "<br>";

/*  match (since php 8, also compare datatype)  */
$result = match ($a) {
    1 => "Variable a is equal to 1",
    2 => "Variable a is equal to 2",
    3 => "Variable a is equal to 3",
    4, 5, 6 => "Variable a is equal to 4 or 5 or 6",
    default => "None were matched",
};
echo $result;

?>

</body>
</html>
