<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
</head>
</html>
<body>
    <?php
        session_start();
        include('components/header.php');
    ?>
    <div class="container-box">
        <nav class="bar">
            <label for="search-bar" class='label-search'>Search songs:</label>
            <input type="search" name="search-bar" id="search-bar">
            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
        </nav>
        <div class="music-container">
            <div class="music-box">
                <a href="#">
                <h3 class="title">A Gift & a Curse</h3>
                <img class="album-img" src="https://upload.wikimedia.org/wikipedia/en/f/f0/Gunna_-_A_Gift_%26_a_Curse.png" alt="album-img">
                <span class="author">Gunna</span>
                </a>
            </div>
        </div>
    </div>
   <?php
        include("components/footer.php");
   ?>
</body>