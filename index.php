<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
</head>
<body>
    <?php
        session_start();
        include("scripts/php/db.php");
        include('components/header.php');
        include('components/artist_profile_card.php');
    ?>
    <div class="container-box">
        <?php
            if(isset($_SESSION['username'])){
                echo "<nav class='bar'>
                <form action='#' method='GET' class='search-form'>
                    <label for='search-bar' class='label-search'>Search songs:</label>
                    <input type='search' name='search-bar' id='search-bar'>
                    <button class='search-button'><i class='fa-solid fa-magnifying-glass' style='color: #ffffff;'></i></button>
                </form>
            </nav>
            <div class='music-container'>
                <div class='music-box'>
                    <a href='#'>
                        <h3 class='title'>A Gift & a Curse</h3>
                        <img class='album-img' src='https://upload.wikimedia.org/wikipedia/en/f/f0/Gunna_-_A_Gift_%26_a_Curse.png' alt='album-img'>
                        <span class='author'>Gunna</span>
                    </a>
                </div>
            </div>
            ";
            
            if($_SERVER['REQUEST_METHOD']=='GET' and isset($_GET['search-bar'])){
                $findArtist = $_GET['search-bar'];
                $sql = "SELECT name, followers FROM artists WHERE name LIKE '%$findArtist%'";
                $result = mysqli_query($db,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<h1 style='color: #ffffff;'>{$row['name']}</h1>";
                    echo "<h4 style='color: #ffffff;'>Followers: {$row['followers']}</h4>";
                }
            }else{
                $sql = "SELECT name, followers FROM artists";
                $result = mysqli_query($db,$sql);
                $artists = show_artist_profile($db);
                foreach ($artists as $artist) {
                    echo artist_profile_card($artist);
                }
            }
            
            mysqli_close($db);
        }
        ?>
        </div>
        
    </div>
   <?php
        include("components/footer.php");    
   ?>
</body>
</html>