<?php
   $db = mysqli_connect('localhost','root','','my-tune-database');


   function show_artist_profile($db){
      $array = array();
      $sql = "SELECT id, name, followers FROM `artists`";
      $result = mysqli_query($db, $sql);
  
      while ($row = mysqli_fetch_assoc($result)) {
          array_push($array, $row);
      }
  
      return $array;
    }

    function show_artist_panel($db,$artist_id){
        $array = array();
        $sql = "SELECT name,followers FROM artists WHERE id = $artist_id";
        $result = mysqli_query($db,$sql);

        while($row = mysqli_fetch_assoc($result)){
            array_push($array,$row);
        }
        return $array;
    }

    function show_artist_songs($db,$artist_id){
        $array = array();
        $sql = "SELECT name, song_file, image, album_id, create_date FROM songs WHERE artist_id = $artist_id";
        $result = mysqli_query($db,$sql);

        while($row = mysqli_fetch_assoc($result)){
            array_push($array,$row);
        }
        return $array;
    }
?>