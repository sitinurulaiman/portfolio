<?php
include_once 'db.php';

$comment_id = $_POST['comment_id'];

$sql_del = "DELETE FROM comment_chap WHERE id = $comment_id";
$stmt = $conn->prepare($sql_del);
$stmt->execute();

if (! empty($stmt)) {
    echo true;
}
?>