<?php
session_start();
$db = mysqli_connect('localhost:3308', 'root', '', 'crud');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
// initialize variables
$name = "";
$address = "";
$id = 0;
$update = false;
if (isset($_POST['save'])) {
 $name = $_POST['name'];
 $address = $_POST['address'];
 $sql = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
 if (mysqli_query($db, $sql)) {

 $_SESSION['message'] = "Address Saved";
 } else {
 $_SESSION['message'] = "Address Save Failed!";
 }
}
if (isset($_POST['update'])) {
 $id = $_POST['id'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $sql = "UPDATE info SET name='$name', address='$address' WHERE id=$id";
 if (mysqli_query($db, $sql)) {
 $_SESSION['message'] = "Address Updated";
 } else {
 $_SESSION['message'] = "Address Update Failed!";
 }
 header('location: index.php');
}
if (isset($_GET['del'])) {
 $id = $_GET['del'];
 $sql = "DELETE FROM info WHERE id=$id";
 if (mysqli_query($db, $sql)) {
 $_SESSION['message'] = "Address Deleted";
 } else {
 $_SESSION['message'] = "Address Delete Failed!";
 }
 header('location: index.php');
}
if (isset($_GET['edit'])) {
 $id = $_GET['edit'];
 $update = true;

 $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
 if (mysqli_num_rows($record) == 1) {
 $n = mysqli_fetch_array($record);
 $name = $n['name'];
 $address = $n['address'];
 }
}