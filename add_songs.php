<?php
    session_start();
    $artist_id = $_SESSION['artist_id'];
    include("components/header.php");
    if(!isset($_SESSION['artist_id'])){
        header("Location: ./artist_login.php?err=2");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Songs</title>
</head>
<body>
    <div class="container-box">
        <div class="form-box">
            <form action="scripts/php/add_song_script.php" method='POST' enctype="multipart/form-data" class="form-add-song">
                <label for="song-name">Song Name:</label>
                <input type="text" name="song-name" id="song-name" required>
                <label for="song-image">Song Image:</label>
                <input type="file" name="song-image" id="song-image" accept='.jpg, .jpeg, .png'>
                <label for="song-file">Song File:</label>
                <input type="file" name="song-file" id="song-file" required accept=".mp3">
                <label for="album">Album:</label>
                <select name="album" id="album">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
                <div class="song-buttons">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Add Song">
                </div>
            </form>
        </div>
    </div>
    <?php
        include("components/footer.php");
    ?>
</body>
</html>