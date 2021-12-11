<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$who_is = $_POST['who_is'];

// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `book_phone`(`name`, `phone`, `who_is`) VALUES(?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $phone, $who_is]);
}

// Read

$sql = $pdo->prepare("SELECT * FROM `book_phone`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$edit_name = $_POST['edit_name'];
$edit_phone = $_POST['edit_phone'];
$edit_who_is = $_POST['edit_who_is'];
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE book_phone SET name=?, phone=?, who_is=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_name, $edit_phone, $edit_who_is, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM book_phone WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
