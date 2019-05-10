<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($con, "INSERT INTO magazin (img, name, price, id) VALUES ( '" . $_FILES['img']['name'] . "', '" . $_POST['name'] . "', '" . $_POST['price'] . "', '')");
header('Location: http://artemf/46/admin.php');
echo $_FILES['img']['name']
echo $_FILES['img']['tmp_name']
?>