<?php


include ("config/config.php");

if(isset($_GET['madg'])) {
    $id = $_GET['madg'];
    $sql = "delete from db_docgia where madg = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>