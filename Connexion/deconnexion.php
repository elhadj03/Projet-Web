<?php

  session_start();

  $_SESSION["connexion"] = false;

  header('Location: connected.php');
?>