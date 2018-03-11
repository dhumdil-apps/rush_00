<?php
    $host = "localhost";
    $username = "root";
    $password = "parola";
    $database = "rush00";

    return '{"hostname":"'.$host.'","username":"'.$username.'","password":"'.$password.'","database":"'.$database.'"}';

    if (isset($config['hostname'])) {
        $hn = "value = '".$config['hostname']."'";
      } else {
        $hn = "placeholder = 'enter hostname here'";
      }
      if (isset($config['username'])) {
        $un = "value = '".$config['username']."'";
      } else {
        $un = "placeholder = 'enter username here'";
      }
      if (isset($config['password'])) {
        $pw = "value = '".$config['password']."'";
      } else {
        $pw = "placeholder = 'enter password here'";
      }
      if (isset($config['database'])) {
        $db = "value = '".$config['database']."'";
      } else {
        $db = "placeholder = 'enter database here'";
      }