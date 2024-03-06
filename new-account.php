<?php
    include('components/header.php');
    $date = date('Y-m-d', strtotime('-13 years'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
<body>
    <div class="container-box">
        <div class="form-box">
            <form action="scripts/php/create_account_script.php" method='POST'>
                <h3>Create Account</h3>
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" placeholder="Nickname" required>
                <label for="password">Password:</label>
                <div class="password-div">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="password-toogle-icon"><i class="fa-regular fa-eye" id='toogle-icon'></i></span>
                </div>
                <label for="birth">Date of birth:</label>
                <input type="date" name="birth" id="birth" max = <?php echo"'$date'";?>>
                <label for="gender">Gender:</label>
                <div class="gender-div">
                <i>Male</i><input type="radio" name="gender" id="gender" value="male" checked>
                <i>Female</i><input type="radio" name="gender" id="gender" value="female">
                </div>
                <input type="submit" value="Create Account">
                <hr>
                <p>You have an account.  <a class="form-links" href="./login.php">Log In</a></p>
                <?php
                    if(isset($_GET['success'])){
                        if($_GET['success']==1){
                            echo "<p style='color: green;' >Success. You have created an account</p>";
                        }
                        if($_GET['success']==0){
                            echo "<p style='color: red;'>Sorry, your username is already taken.</p>";
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