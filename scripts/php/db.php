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
?>