
<!DOCTYPE html>
<html>

<body>
<h1>TOPICS</h1>
<p><a href="#ch1">Chapter 1</a></p>
<p><a href="#ch2">Chapter 2</a></p>
<p><a href="#ch3">Chapter 3</a></p>
<p><a href="#ch4">Chapter 4</a></p>

<div id ="ch1"></div>
<h2> The Characteristics of the SQA environment process</h2>
<?php
$db = mysqli_connect("localhost","root","","eprofile");
$msg = "";     
if(isset($_POST['upload'])){

    $image = $_FILES['image']['name'];
    $text = mysqli_real_escape_string($db, $_POST['text']);
    $target = "CH1/".basename($file);
    $sql = "INSERT INTO chp1 (file, text) VALUES ('$image','$text')";
    mysqli_query($db,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {
        $msg = "Image uploaded successfully";
    }
    else{
    $msg = "Failed to upload image";
    }
    }
    $result = mysqli_query($db, "SELECT * FROM eprofile");


?>

    <form method="POST" action="topic.php" enctype="multipart/form-data">
    <div>
    <input type="file" name="image">
</div>
<br>
<div>
    <button type="submit" name="upload" value="Upload">POST
</button>
</div>
</body>
</html>
