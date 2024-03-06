<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
   
</head>
<?php
    include('components/header.php');
?>
<body>
    <div class="container-box">
        <div class="form-box">
            <form action="scripts/php/login_script.php" method='POST'>
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" placeholder="Nickname" required>
                <label for="password">Password:</label>
                <div class="password-div">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="password-toogle-icon"><i class="fa-regular fa-eye" id='toogle-icon'></i></span>
                </div>
                <br><br>
                <input type="submit" value="Log In">
                <a href="#" class="form-links" >Forgot your password?</a>
                <hr>
                <p>Don't have an account.  <a class="form-links" href="./new-account.php">Create it now</a></p>
                <?php
                    if(isset($_GET['err'])){
                        if($_GET['err']==1){
                            echo "<p style='color: red;'>Invalid login or password!</p>";
                        }
                        if($_GET['err']==2){
                            echo "<p style='color: red;'>You are not logged in!</p>";
                        }
                    }
                ?>
            </form>
            </div>
    </div>
    <?php
        include("components/footer.php");
    ?>
    <script src="scripts/js/password-toogle.js"></script>
</body>
</html>