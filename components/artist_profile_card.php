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

?>