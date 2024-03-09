<!DOCTYPE html>
<html lang="en">
<head>
    <title>Become artist</title>
    <?php
        session_start();
        include("scripts/php/db.php");
        include('components/header.php');
        include('components/artist_profile_card.php');
        if(!isset($_SESSION['artist_name']) and !isset($_SESSION['artist_id'])){
            header("Location: ./artist_login.php?err=1");
        }
    ?>
</head>
<body>
    
    <div class="container-box">
        <div class="artist-panel-container">
            <div class="profile-panel-div">
                <?php
                    $artist_id = $_SESSION['artist_id'];
                    $artist = show_artist_panel($db, $artist_id);
                        foreach($artist as $panel){
                            echo artist_panel_card($panel);
                        }
                ?>
            </div>
            <div class="songs-container">
                <h1>Your Songs & Albums</h1>
                <div class="songs">
                    
                    <?php
                    $songs = show_artist_songs($db,$artist_id);
                    foreach($songs as $song){
                        echo artist_songs_panel($song);
                    }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
   <?php
        include("components/audio_bar.php");   
        include("components/footer.php");    
   ?>
   <script src="scripts/js/playAudio.js"></script>
</body>
</html>