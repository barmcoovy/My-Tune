<?php
    session_start();
    include('./db.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $artist_name = $_POST['name'];
        $artist_password = sha1($_POST['password']);
        $sql = "SELECT id, name,password FROM artists WHERE name = '$artist_name'";
        $query = mysqli_query($db,$sql);
        
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($artist_password != $row['password']){
                header("Location: ../../artist_login.php?err=1");
                
            }else{
                $_SESSION['artist_name'] = $artist_name;
                $_SESSION['artist_id'] = $row['id'];
                header("Location: ../../artist_panel.php?artist={$row['name']}");
            }
            
        }
    }
    mysqli_close($db);
    exit();
?>