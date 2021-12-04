<?php
require 'action.php';
require 'navibar.php';
?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root","", "eprofile");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	  $allowedExt = array('jpg', 'gif', 'png', 'jpeg');
  	// Get image name
	  $image = $_FILES['image']['name'];
	  $type = $_FILES['image']['type'];
	  $size = $_FILES['image']['size'];
	  $image_exp = explode(".", $image);
	  $fileExt = strtolower(end($image_exp));

	  $newfileName = md5(time() . $image) . '.' . $fileExt;
 

  	// image file directory
	  $target = "./upload/chp8/".basename($newfileName);

	  if(in_array($fileExt, $allowedExt)) {
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
			{
				$sql = "INSERT INTO chp8 (image_name, image_path) VALUES ('$image', '$target')";
				// execute query
				mysqli_query($db, $sql);
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
			}
		  
	  } else {
		  $msg = 'Invalid file extension. Allowed file types:  ' . implode(',', $allowedExt);
	  }
  }
  $result = mysqli_query($db, "SELECT * FROM chp8");
?>
<!DOCTYPE html>
		<html>
				<head>
				<title>Chapter 8</title>
					<script src="https://kit.fontawesome.com/1435ee8c66.js" crossorigin="anonymous"></script>
					<!-- Latest compiled and minified CSS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
					<!-- jQuery library -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
					<!-- Popper JS -->
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
					<!-- Latest compiled JavaScript -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
					<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome to SQA</title>

    <!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/light-box.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/try.css">
    <link rel="stylesheet" href="blockbutton.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
        * {
           box-sizing: border-box;
        }
        .picColumn {
          
           width: 100%;
           padding: 5px;
        }
        h1{
           text-align: center;
		}
		img{
						  width : 90;
						  height : 90;
					  }

        </style> 
					
				</head>
			<body class = "bg-dark">
			
			<div class="page-content">
                <div class="masonry">
                 
				<div class="picColumn">
                            <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-1.png" alt="" width="1100" height="700"></a> 
                            </div>
                           
                            <div class="picColumn">
							  <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-2.png" alt="" width="1100" height="700"></a>
                            </div>
                            
                        <div class="picColumn">
						 <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-3.png" alt="" width="1100" height="700"></a> 
                            </div>
                            <div class="picColumn">
                            <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-4.png" alt="" width="1100" height="700"></a> 
                            </div>
                           
                            <div class="picColumn">
							  <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-5.png" alt="" width="1100" height="700"></a>
                            </div>
                            
                        <div class="picColumn">
						 <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-6.png" alt="" width="1100" height="700"></a> 
							</div>
							<div class="picColumn">
                            <img src="img/TOPIC 8-SOFTWARE TESTING - IMPLEMENTATION-7.png" alt="" width="1100" height="700"></a> 
                            </div>
                           
					</div>       
                        
					<br></br>
					<br></br>
					<br></br>
					<br></br>
					
               
			<h2 style="color:bisque;text-align:center; font-size:400px> ">Do share your note and leave comment for us here ><
					</h2>
		   <br></br>
		   <br></br>
            <div class="section-heading">
				<div id="content">
				<center>	<?php
						while ($row = mysqli_fetch_array($result)) {
						echo "<div id='img_div'>";
							echo "<img src='".$row['image_path']."''width='450' height='450' >";
						echo "</div>";
						}
					?>
					<br>
  					<form  method="POST" action="ch8.php" enctype="multipart/form-data">
  						<input type="hidden" name="size" value="1000000">
						<div>
							<input type="file" name="image">
						</div>
  						<div>
							<button type="submit" name="upload">POST</button>
							<h5 class="float-right text-success p-2"><?= $msg; ?></h5>
						</div>
					 </form> <center>
					</section>
					<section class="content-section">
				<div class="container">
					<div class="row justify-content-center">
					<p style="color:yellow" style="font: italic;">Write your comment here !!
				</p>
						<div class="col-lg-12"></div>
						<form action="ch8.php" method="POST" class="p-2">
						<input type="hidden" name="id" value ="<?= $u_id; ?>">
							<div class="form-group">
								<input type="text" name="name" class="form-control
								rounded-0" placeholder="Enter your name" value="<?= $u_name; ?>">
							</div>
							<div class="form-group">
								<select class="form-control" name="chapter" value="">
									<option value="" selected disabled>Choose Chapter</option>
									<option value="Chapter 1">CHAPTER 1</option>
									<option value="Chapter 2">CHAPTER 2</option>
									<option value="Chapter 3">CHAPTER 3</option>
									<option value="Chapter 4">CHAPTER 4</option>
									<option value="Chapter 5">CHAPTER 5</option>
									<option value="Chapter 6">CHAPTER 6</option>
									<option value="Chapter 7">CHAPTER 7</option>
									<option value="Chapter 8">CHAPTER 8</option>
									<option value="Chapter 9">CHAPTER 9</option>
									<option value="Chapter 10">CHAPTER 10</option>
									<option value="Chapter 11">CHAPTER 11</option>
									<option value="Chapter 12">CHAPTER 12</option>
								</select>
                        	</div>
							<div class="form-group">
								<textarea name="comment" class="form-control rounded-0" 
								placeholder="Write your comment here" ><?= $u_comment; ?></textarea>
							</div>
							<div class="form-group">
								<?php if($update==true){ ?>
								<input type="submit" name="update" class="btn btn-success rounded-0" value="Update Comment">
								<?php } else{ ?>
								<input type="submit" name="submit" class="btn btn-primary rounded-0" value="Post Comment">
								<?php } ?>
								<h5 class="float-right text-success p-2"></h5>
							</div>
								</section>
								
						</form>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-5 rounded bg-light p-3">
						<?php
							$sql ="SELECT * FROM comment_chp ORDER BY id DESC";
							$result = $conn->query($sql);
							while($row=$result->fetch_assoc()){
						?>
							<div class="card mb-2 border-secondary">
								<div class="card-header bg-secondary py-1 text-light">
									<span class="font-italic">Posted by:  <?= $row['name'] ?> </span><br>
									<span class="float-center">          <?= $row['chapter'] ?></span>
									<span class="float-right font italic">On: <?= $row['cur_date'] ?></span>
								</div>
								<div class="card-body py-2">
									<p class="card-text"><?= $row['comment'] ?></p>
								</div>
								<div class="card-footer-py-2">
									<div class="float-center">
									<a href="action.php?del=<?= $row['id'] ?>" class="text-danger mr-2" onclick="return confirm ('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
									<a href="ch8.php?edit=<?= $row['id'] ?>" class="text-success" title="Edit"><i class="fas fa-edit"></i></a>
								</div>
							</div>
					</div>
						<?php } ?>
				</div>
			</div>
		</body>
	</html>