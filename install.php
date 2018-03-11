<?php
(@ $config = include_once 'config.php') or die ("There was a problem with you config file. Check it and try again");
// var_dump($config);
$config = json_decode($config,TRUE);
// var_dump($config);

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

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    ($files = scandir("MySQL")) or die ("MySQL directory no found.");
    $files = array_values(array_diff($files,array(".","..")));
    if (empty($files)) {
        exit("No files in MySql Directory");
    }
    create_database($_POST["hostname"],$_POST["username"],$_POST["password"], $_POST["database"]);
    $connection = mysqli_connect($config["hostname"],$config["username"],$config["password"],$config["database"]);

    foreach($files as $file){
        $SQL = file_get_contents("MySQL/".$file);
        // var_dump($SQL);
        $result = mysqli_query($connection,$SQL);
        // var_dump($result);
        if($result){
            echo $file." Installed <br><br>";
        } else {
            echo $file." Not Installed. There was a problem <br><br>";
        }
        // sleep(1);
    }


  }

    function create_database($hostname, $username, $password, $database){
        // connect to the MySQL server
        $conn = new mysqli($hostname, $username, $password);
    
        // check connection
        if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            echo(mysqli_connect_errno());
        }

        // sql query with CREATE DATABASE
        $sql = "CREATE DATABASE `".$database."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
    
        // Performs the $sql query on the server to create the database
        if ($conn->query($sql) === TRUE) {
            return(TRUE);
        } else {
            return(mysqli_connect_error());
        }

        $conn->close();
    }
?>


<form method="POST">
    Hostname:
    <input type="text" name="hostname" <?php echo $hn ?>>
    <br> Username:
    <input type="text" name="username" <?php echo $un ?>>
    <br> Password:
    <input type="text" name="password" <?php echo $pw ?>>
    <br> Database:
    <input type="text" name="database" <?php echo $db ?>>
    <br>
    <input type="submit">

    <!-- <input type="submit" name="sync" value="SYNC"> -->
</form>