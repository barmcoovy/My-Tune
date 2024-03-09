<?php
    session_start();
    include("./db.php");
    $artist_name = $_SESSION['artist_name'];
    $artist_id = $_SESSION['artist_id'];
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $song_Name = $_POST['song-name'];
        $time = time();
    
        $song_dir = '../../static/songs/';
        $songNameFile = $_FILES['song-file'];

        $fileSongExtended = pathinfo($_FILES['song-file']['name'], PATHINFO_EXTENSION);

        $newSongFileName =  $song_Name . "." .  $fileSongExtended;

        $songSourceWithPath = $song_dir . $newSongFileName;

        move_uploaded_file($_FILES['song-file']['tmp_name'], $songSourceWithPath);
        
        if($_FILES['song-image']){
            $mainFolder = '../../static/images/';

            $nameFile = $_FILES['song-image']['name'];

            $mainPath = $mainFolder . basename($_FILES['song-image']['name']);

            $fileExtended = pathinfo($_FILES['song-image']['name'], PATHINFO_EXTENSION);
            $newFileName = $artist_name . $time . "_" . $song_Name . "." .  $fileExtended;
            $sourceWithPath = $mainFolder . $newFileName;
            

            move_uploaded_file($_FILES['song-image']['tmp_name'], $sourceWithPath);
        }
        $sql = "INSERT INTO songs(name,song_file, image, artist_id) VALUES('$song_Name', '$newSongFileName', '$newFileName', $artist_id)";
        mysqli_query($db,$sql);
        header("Location: ../../add_songs.php?success=1");
    }
