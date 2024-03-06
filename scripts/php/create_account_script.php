<?php
    include('db.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['nickname'];
        $password = sha1($_POST['password']);
        $birth_date = $_POST['birth'];
        $gender = $_POST['gender'];

        $isTakenQuery = "SELECT username FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $isTakenQuery);
        $usernameChecked = mysqli_fetch_assoc($result);
        
        if(!$usernameChecked){
            $sql = "INSERT INTO users (username, password, birth_date, gender) 
            VALUES ('$username', '$password', '$birth_date', '$gender')";
            mysqli_query($db,$sql);
            header("Location: ../../new-account.php?success=1");
        }else{
            header("Location: ../../new-account.php?success=0");
        }
        
    }
    mysqli_close($db);
    exit();