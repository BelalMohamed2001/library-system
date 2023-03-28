<?php
include_once "db.php";


$bookName = $_REQUEST["bookName"];
$categoryid = $_REQUEST["categoryid"];
$quantity = $_REQUEST["quantity"];
$fees = $_REQUEST["fees"];


if($_REQUEST["bookId"] != ""){
	$bookId = $_REQUEST["bookId"];
	$sql = "UPDATE books SET bookname = '$bookName', categoryid = '$categoryid', quantity = '$quantity', fees = '$fees',  WHERE id = $bookId";
	$conn->query($sql);
}
else{
	$sql = "insert into books (bookName,  categoryid, quantity, fees) values ('$bookName', '$categoryid', '$quantity', '$fees')";
	$conn->query($sql);
}

header('location:listAllBooks.php');
?>