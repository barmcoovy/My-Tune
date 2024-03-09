<?php

    function header_right_side($currentPage){
        if (!isset($_SESSION['username']) and !isset($_SESSION['artist_name'])) {
            if($currentPage =='artist.php'){
               echo "<div class='right-side'>";
               echo "<a href='artist_register.php' class='links-login'>Become an artist</a>";
               echo "<a href='artist_login.php' class='links-login'>Log In</a>";
               echo "</div>";
           }
           else if($currentPage =='artist_register.php' || $currentPage =='artist_login.php'){
               echo "";
           }
           else{
               echo "<div class='right-side'>";
               echo "<a href='new-account.php' class='links-login'>Create account</a>";
               echo "<a href='login.php' class='links-login'>Log In</a>";
               echo "</div>";
           }
       }else{
           if(isset($_SESSION['username'])){
               if($currentPage == "panel.php"){
                   echo "<div class='right-side'>";
                   echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                   echo "</div>";
               }
               else{
                   echo "<div class='right-side'>";
                   echo "<a href='./panel.php' class='links-login'>Your Panel</a>";
                   echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                   echo "</div>";
               }
           }
           if(isset($_SESSION['artist_name'])){
               if($currentPage == "artist_panel.php"){
                   echo "<div class='right-side'>";
                   echo "<a href='./add_songs.php' class='links-login'>Add Songs</a>";
                   echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                   echo "</div>";
               }
               else{
                   echo "<div class='right-side'>";
                   echo "<a href='./artist_panel.php' class='links-login'>Artist Panel</a>";
                   echo "<a href='scripts/php/logout.php' class='links-login'>Logout</a>";
                   echo "</div>";
               }
           }
           
       }
    }

    function header_left_side($currentPage){
        if($currentPage == 'artist.php' || $currentPage == 'artist_login.php' || $currentPage == 'artist_register.php'){
            echo "<a href='artist.php'><img href='index.php' src='static/logo.png' width='50px' height='50px'></a>";
        }else{
            echo "<a href='index.php'><img href='index.php' src='static/logo.png' width='50px' height='50px'></a>";
        }
    }