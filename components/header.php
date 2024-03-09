<?php
    include('functions.php');
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/artist.css">
    <link rel="stylesheet" href="styles/audio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="container">
        <div class="left-side">
            <?php
                header_left_side($currentPage);
            ?>
           
        </div>
        <?php
            header_right_side($currentPage);
        ?>
      </div>
</body>
</html>