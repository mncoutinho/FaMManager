<?php
  function isOnline(){
     session_start();
       if(isset($_SESSION['id']))
           true;
      return false;
  }
?>