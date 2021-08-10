<!DOCTYPE html>
<html>
<head>
	<title></title>  
	<link rel="stylesheet" type="text/css" href="new_post.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    <div class="add-button">  
      <a class="btn btn-primary" href="home.php"> <span class="glyphicon glyphicon-home"></span> Home</a> 
    </div>
      <div class="post">
        <form method="get" action="forum.php">          
        <h2>New Post</h2>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
         <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" rows="5" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div> 
    </div>
</body>
</html>