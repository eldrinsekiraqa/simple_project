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
    <a class="btn btn-primary" href="new_post.php"> <span class="glyphicon glyphicon-plus"></span> New Post</a> 
  </div>
    <?php
$conn = mysqli_connect("localhost", "root", "", "posts");
 
// Check connection
  if($conn -> connect_error){
    die("Could not connect. " . $conn ->connect_error);
}

$sql = "SELECT id,title,name,description from posts";
$result = $conn->query($sql);

if ($result -> num_rows > 0 ) {
  while ($row = $result -> fetch_assoc()) {
      $count = strlen($row ['description']);
    echo " <div class='post'>
        <h2>".$row['title']."</h2>";
        if ($count <= 90) {
                    echo "<p>".substr($row['description'],0, 30)."</p>";
                  } else {
                    echo "<p>".substr($row['description'],0, 30)." ...</p>";
                  }   
       echo " <p>Posted by : ".$row['name']." </p>";
          if ($count <= 90) {
                    
                  } else {
                    echo "<a class='button-read-more' href='single_view.php?id=".$row['id']."'>Read more</a>";
                  }       
        echo "</div>";
  }
}
?>
    </div>
</body>
</html>
