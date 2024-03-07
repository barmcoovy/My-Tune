<?php
    session_start();
    include("components/header.php");
    if(!isset($_SESSION['username'])){
        header("Location: ./login.php?err=2");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "{$_SESSION['username']}" ?> panel</title>
</head>
<body>
    <div class="container-box">
       <center>Welcome to your panel <?php echo "{$_SESSION['username']}"?></center>
    </div>
    <?php
        include("components/footer.php");
    ?>
</body>
</html>