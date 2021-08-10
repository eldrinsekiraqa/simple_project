<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="add-button">  
      <a class="btn btn-primary" href="home.php"> <span class="glyphicon glyphicon-home"></span> Home</a> 
  </div>
    <?php
$conn = mysqli_connect("localhost", "root", "", "posts");
 
// Check connection
  if($conn -> connect_error){
    die("Could not connect. " . $conn ->connect_error);
}

$id = $_GET ['id'];

$sql = "SELECT id,title,name,description from posts where id=$id";
$result = $conn->query($sql);

  while ($row = $result -> fetch_assoc()) {
        $MessageW = wordwrap($row ['description'], 90, "\n", true);
        $MessageW = htmlentities($MessageW);
        $MessageW = nl2br($MessageW);    
        echo " <div class='post'>
        <h2>".$row['title']."</h2>
        <p>".$MessageW."</p>
        <p>Posted by : ".$row['name']." </p>
  </div> ";
}

?>
</body>
</html>