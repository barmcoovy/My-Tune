<?php
    session_start();
    include('db.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['nickname'];
        $password = sha1($_POST['password']);

        $sql = "SELECT username,password FROM users WHERE username = '$username'";
        $query = mysqli_query($db,$sql);
        
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($password == $row['password']){
                $_SESSION['username'] = $username;
                header("Location: ../../index.php");
            }else{
                header("Location: ../../login.php?err=1");
            }
            
        }
    }
    mysqli_close($db);
    exit();