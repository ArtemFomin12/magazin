<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($connect, "UPDATE magazin SET name='" . $_POST['name'] . "', price='" . $_POST['price'] . "', img='" . $_POST['img'] . "' WHERE id='". $_POST['id'] . "'");
header('Location: http://artemf/46/admin.php'); 
?>