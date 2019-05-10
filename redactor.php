<meta charset="utf-8">
<form action="update.php" method="POST">
	<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
	<?php echo '<input type="" name="img" value="' . $_POST['img'] . '">'; ?>
	<?php echo '<input type="" name="name" value="' . $_POST['name'] . '">'; ?>
	<?php echo '<input type="" name="price" value="' . $_POST['price'] . '">'; ?>
	<button>Редактировать</button>
</form>