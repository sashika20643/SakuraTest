<?php
 if(file_get_contents( 'Book-keeper/.env.example')){
  function putcontent($search,$replace){
    $file = 'Book-keeper/.env.example';
    $content = file_get_contents($file);

    $content = str_replace($search, $replace, $content);
    file_put_contents($file, $content); 
    return 1;
};





$search = 'APP_NAME=Laravel';
$replace = 'APP_NAME='.$_POST["name"];
putcontent($search,$replace);

//-----------------db-------------

$search = 'DB_DATABASE=laravel';
$replace = 'DB_DATABASE='.$_POST["dbname"];
putcontent($search,$replace);


$search = 'DB_USERNAME=root';
$replace = 'DB_USERNAME='.$_POST["uname"];
putcontent($search,$replace);

$search = 'DB_PASSWORD=';
$replace = 'DB_PASSWORD='.$_POST["pw"];
putcontent($search,$replace);

$search='DB_HOST=127.0.0.1';
$replace='DB_HOST='.$_POST["dbhost"];
putcontent($search,$replace);

$search='DB_PORT=3306';
$replace='DB_PORT='.$_POST["dbport"];
putcontent($search,$replace);

$servername = "localhost";
$username = "root";
$password = "";

if(isset($_POST["createdb"]) ){
// Create connection

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE ".$_POST["dbname"];
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
}

rename("Book-keeper/.env.example","Book-keeper/.env");
header("Location: Book-keeper/command.php");
exit();
 }
 else{
  echo("Allready installed");

 }
?>

