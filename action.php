<?php
require 'db.php';
$msg = "";
$u_id="";
$u_name="";
$u_chapter="";
$u_comment="";
$update=false;

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $chapter=$_POST['chapter'];
    $comment=$_POST['comment'];
    $date=date("Y-m-d");

    $sql="INSERT INTO comment_chp(name,chapter,comment,cur_date)VALUES ('$name','$chapter','$comment','$date')";

    if($conn->query($sql)){
        $msg = "Posted Successfully!";
}
else {
$msg = "Failed to post comment!";
}
}
if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch1.php');
    }
}
if(isset($_GET['dl'])){
    $id=$_GET['dl'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch2.php');
    }
}
if(isset($_GET['dele'])){
    $id=$_GET['dele'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch3.php');
    }
}
if(isset($_GET['delet'])){
    $id=$_GET['delet'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch4.php');
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch5.php');
    }
}
if(isset($_GET['th'])){
    $id=$_GET['th'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch6.php');
    }
}
if(isset($_GET['thr'])){
    $id=$_GET['thr'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch7.php');
    }
}
if(isset($_GET['thro'])){
    $id=$_GET['thro'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch8.php');
    }
}
if(isset($_GET['el'])){
    $id=$_GET['el'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch9.php');
    }
}
if(isset($_GET['eli'])){
    $id=$_GET['eli'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch10.php');
    }
}
if(isset($_GET['elim'])){
    $id=$_GET['elim'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch11.php');
    }
}
if(isset($_GET['elimi'])){
    $id=$_GET['elimi'];
    $sql="DELETE FROM comment_chp WHERE id='$id'";
    if($conn->query($sql)){
        header('location:ch12.php');
    }
}
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $sql="SELECT * FROM comment_chp WHERE id='$id'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $u_id=$row['id'];
    $u_name=$row['name'];
    $u_chapter=$row['chapter'];
    $u_comment=$row['comment'];

    $update=true;
}
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $chapter=$_POST['chapter'];
        $comment=$_POST['comment'];
        $date=date("Y-m-d");

        $sql="UPDATE comment_chp SET name='$name', chapter='$chapter', comment='$comment', cur_date='$date' WHERE id='$id'";

        if($conn->query($sql)){
            $msg = "Posted Successfully!";
    }
    }


?>