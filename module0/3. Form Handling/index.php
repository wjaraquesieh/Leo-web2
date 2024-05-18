<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. Variable & Datatype</title>
</head>
<body>
<main>
  <form action="action.php" method="post">
    <label for="firstname">First name:</label>
    <input name="firstname" id="firstname" type="text" placeholder="Firstname...">

    <label for="lastname">Last name:</label>
    <input name="lastname" id="lastname" type="text" placeholder="Lastname...">

    <label for="favouritepet">Favourite Pet?</label>
    <select id="favouritepet" name="favouritepet">
      <option value="none">None</option>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="bird">Bird</option>
    </select>

    <button type="submit">Submit</button>
  </form>
</main>
</body>
</html>
