<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up and running</title>
</head>
<body>
    <?php 
    echo "You tried loggin in with name: " . $_POST["name"] ;
    echo "<br>" ;
    echo "And email adress: " . $_POST["email"] ;
    ?>

    <a href="../index.php" > Ga terug ofz</a>


    <?php
    echo date("d-m-y");
    echo "<br>";
    $timezone = new DateTimeZone("europe/amsterdam");
    $date = new DateTimeImmutable("now", $timezone);
    echo $date->format("H:i:s");
    ?>

    
</body>
</html>