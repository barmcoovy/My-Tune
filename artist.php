<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ./login.php?err=2");
    }
    include("components/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("components/footer.php");
    ?>
</body>
</html>