<?php 

    $link = mysqli_connect("localhost", "root", "", "posts");
 
// Check connection
	if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	$title = mysqli_real_escape_string($link, $_REQUEST['title']);
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$description = mysqli_real_escape_string($link, $_REQUEST['description']);

	$sql = "INSERT INTO posts (title, name, description) VALUES ('$title', '$name', '$description')";
if(mysqli_query($link, $sql)){
	include "home.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>