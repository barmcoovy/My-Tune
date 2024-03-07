<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/artist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="left-side">
           <a href="index.php"><img href='index.php' src="static/logo.png" width='50px' height="50px"></a>
        </div>
        <?php
            $currentPage = basename($_SERVER['PHP_SELF']);

            if (!isset($_SESSION['username'])) {
                echo "<div class='right-side'>";
                echo "<a href='new-account.php' class='links-login'>Create account</a>";
                echo "<a href='login.php' class='links-login'>Log In</a>";
                echo "</div>";
            }else{
                
                if($currentPage == "panel.php"){
                    echo "<div class='right-side'>";
                    echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                    echo "</div>";
                }
                else{
                    echo "<div class='right-side'>";
                    echo "<a href='./panel.php' class='links-login'>Your Panel</a>";
                    echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                    echo "</div>";
                }
            }
            
            
        ?>
      </div>
</body>
</html>