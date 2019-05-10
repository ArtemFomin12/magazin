<!DOCTYPE html>
<html>
<head>
	<title>46</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="header mt-3">
		<div class="container-fluid">
			<p><a href="admin.php" class="badge badge-dark">Admin panel</a></p>
		</div>
	</div>
	<form action="dobav.php" method="POST" enctype="multipart/form-data">
		<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
		<?php echo '<input type="file" name="img" value="' . $_POST['img'] . '" placeholder="картинка игры">'; ?>
		<?php echo '<input type="" name="name" value="' . $_POST['name'] . '" placeholder="имя игры" class="bg-dark">'; ?>
		<?php echo '<input type="" name="price" value="' . $_POST['price'] . '" placeholder="цена игры" class="bg-dark">'; ?>
		<button type="" class="btn btn-dark">Добавить</button>
	</form>
	<div class="content">
		<div class="container mt-3">
			<div class="row">
				<div class="col-12">
					<div class="body">
						<?php
							$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
							$query = mysqli_query($connect, 'SELECT * FROM magazin');
						?>
							<?php for($i = 0; $i < $query->num_rows; $i++) {
							$img = $query->fetch_assoc(); echo '<img src="' . $img['img'] . '" class="w-auto h-auto">'; 
							?>
							<h5><a href="#" class="text-dark">
								<?php echo $img['name']; ?>
							</a></h5>
							<p><a href="#" class="text-dark">
								<?php echo $img['price']; ?>
							</a></p>
						<form action="delete.php" method="GET">
							<?php echo '<input name="id" value="' . $img['id'] . '" style="display: none">'; ?>
							<button type="" class="btn btn-dark">Delete</button>
						</form>
						<form action="redactor.php" method="POST">
							<?php echo '<input type="hidden" name="id" value="' . $img['id'] . '">'; ?>
							<?php echo '<input type="hidden" name="name" value="' . $img['name'] . '">'; ?>
							<?php echo '<input type="hidden" name="price" value="' . $img['price'] . '">'; ?>
							<?php echo '<input type="hidden" name="img" value="' . $img['img'] . '">'; ?>
							<button type="" class="btn btn-dark">Редактировать</button>
						</form>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>