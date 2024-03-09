<?php
    include('components/header.php');
    include("scripts/php/db.php");

    $sql = "SELECT en_short_name FROM `countries`";
    $result = mysqli_query($db,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
<body>
    <div class="container-box">
        <div class="form-box">
            <form action="scripts/php/artist_script.php" method='POST' class="form-artist">
                <h3>Become an artist</h3>
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Name" required>
                <label for="email">Email Adress:</label>
                <input type="email" name="email" placeholder="Email Adress" required>
                <label for="password">Password:</label>
                <div class="password-div">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="password-toogle-icon"><i class="fa-regular fa-eye" id='toogle-icon'></i></span>
                </div>
                <div class="div-select-country">
                    <label for="country">Select your country</label>
                    <select name="country" id="country-select">
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['en_short_name']}'>{$row['en_short_name']}</option>";
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" value="Create Artist Account">
                <hr>
                <p>You have an account.  <a class="form-links" href="./login.php">Log In</a></p>
                <?php
                    if(isset($_GET['success'])){
                        if($_GET['success']==1){
                            echo "<p style='color: green;' >Success. You have created an artist account</p>";
                        }
                        if($_GET['success']==0){
                            echo "<p style='color: red;'>Sorry, your artist username is already taken.</p>";
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