<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*  turn user input to special html entity  */
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritePet = htmlspecialchars($_POST['favouritepet']);

    if (empty($firstname) || empty($lastname) || empty($favouritePet)) {
        header("Location: ./index.php");
        exit();
    }

    echo "This is the data just submitted:";
    echo "<br/>";
    echo "First name: $firstname";
    echo "<br/>";
    echo "Last name: $lastname";
    echo "<br/>";
    echo "Favourite pet: $favouritePet";
    header("Location: ./index.php");
} else {
    header("Location: ./index.php");
}
