<?php
    include('./db.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $artist_name = $_POST['name'];
        $artist_email = $_POST['email'];
        $artist_password = sha1($_POST['password']);
        $artist_country = $_POST['country'];

        $check_name = "SELECT name FROM artists WHERE name = '$artist_name'";
        $check_name_query = mysqli_query($db,$check_name);
        if(mysqli_num_rows($check_name_query)== 0 ){
            $sql = "INSERT INTO artists(name,password,email,country) VALUES('$artist_name','$artist_password','$artist_email','$artist_country')";
            mysqli_query($db, $sql);
            mysqli_close($db);
            header("Location: ../../artist.php?success=1");
        }else{
            mysqli_close($db);
            header("Location: ../../artist.php?success=0");
        }
    }
?>