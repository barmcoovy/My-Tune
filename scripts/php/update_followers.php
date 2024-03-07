<?php
    include("./db.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $artist_id = $_POST['artist_id'];

        $update_sql = "UPDATE artists SET followers = followers + 1 WHERE id = $artist_id";
        mysqli_query($db,$update_sql);
    }
    mysqli_close($db);
    header("Location: ../../index.php");
?>