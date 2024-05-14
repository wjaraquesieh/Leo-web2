<?php
// Task #1 Generate the date using php.
// Save it to a variable.
// Output it within a p tag in your body.
$date = date('F j, Y');

// Task #2 Hard-code an array of strings.
// Each string is a quote.
// Within the body of your html, loop through this array.
// Output each quote within a <p> tag
$quotes = [
    "Know yourself, know your enemy, and you will never be defeated in a hundred battles",
    "An inch of time is worth an inch of gold, but an inch of gold cannot buy an inch of time",
    "Where there's a will, there's a way"
];

// Task #3 The following array of hashes
// contains title and URLs for websites.
$links = [
    ['title' => 'Google', 'href' => 'http://www.google.com'],
    ['title' => 'Apple', 'href' => 'http://apple.com'],
    ['title' => 'Xiaomi', 'href' => 'https://mi.com']
];

// Task #4 The following hash of hashes contains
// information about the ghosts from Pacman. The keys
// for the outer hash are the ghost names.
$ghosts = [
    'Shadow' => ['nickname' => 'blinky', 'color' => 'red'],
    'Speedy' => ['nickname' => 'pinky', 'color' => 'pink'],
    'Bashful' => ['nickname' => 'inky', 'color' => 'cyan'],
    'Pokey' => ['nickname' => 'clyde', 'color' => 'orange'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Intro to PHP Challenge</title>
</head>
<body>
<!-- Task #1 Outputting the date -->
<p>Today's date is: <?php echo $date; ?></p>

<!-- Task #2 Outputting the quotes -->
<?php foreach ($quotes as $quote): ?>
  <p><?php echo $quote; ?></p>
<?php endforeach; ?>

<!-- Task #3 Outputting the links -->
<ul>
    <?php foreach ($links as $link): ?>
      <li><a href="<?php echo $link['href']; ?>"><?php echo $link['title']; ?></a></li>
    <?php endforeach; ?>
</ul>

<!-- Task #4 Outputting information about ghosts -->
<?php foreach ($ghosts as $ghost => $details): ?>
  <p>My name is <?php echo $ghost; ?>. My nickname is <span style="color:<?php echo $details['color']; ?>;"><?php echo $details['nickname']; ?></span>. I
    am <?php echo $details['color']; ?>.</p>
<?php endforeach; ?>
</body>
</html>
