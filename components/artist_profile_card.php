<?php
    function artist_profile_card($artist){
        $body =  <<<END
                <h1 class='artist-name'>{$artist['name']}<h1>
                <h3 class='followers-number'>Followers: {$artist['followers']}<h3>
                <form action='scripts/php/update_followers.php' method='POST'>
                <input type='hidden' name='artist_id' value='{$artist['id']}'> 
                <button class='follow-btn'>Follow</button>
                </form>
                END;
        return $body;
        }

        function artist_panel_card($artist){
                $body = <<<END
                <h1 class='artist-name'>{$artist['name']}<h1>
                <img class='profile-img' src='https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/1037354_v9_bb.jpg' alt='profile-photo'>
                <h3 class='followers-number'>Followers: {$artist['followers']}<h3>
                END;
        return $body;
        }

        function artist_songs_panel($songs){
                $body = <<<END
                <div class='song'>
                <img class='song-image' src='static/images/{$songs['image']}'> 
                <h1 class='song-name'>{$songs['name']}</h1>
                <audio class='song-audio' src='static/songs/{$songs['song_file']}' controls></audio>
                <p class='create-date-song'>{$songs['create_date']}</p>
                <span class='play-audio'><i class="fa-solid fa-play"></i><span></div>
                END;
        return $body;
        }
?>

