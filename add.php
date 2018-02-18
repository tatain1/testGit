<?php
include 'pdo.php';

$id = $_REQUEST['id'];
$val = $_REQUEST['val'];

$sql = "INSERT INTO tchat_message (user_id, content)
        VALUES ($id, '$val')";
$stmt = $pdo->prepare($sql);
$stmt->execute();


echo $sql;
?>
