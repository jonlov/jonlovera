<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'Message has been sent';
        
  } else {
    header('HTTP/1.0 400 Bad Request');
    die('Bad request.');     
  }
?>