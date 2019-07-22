<!DOCTYPE html>
<html>
<head>
	<title>Form Buku</title>
</head>
<body>
	<form method="POST" action="/ci/books/<?php if(isset($data['id'])){echo "edit";}else{echo "add";} ?>">
		<?php if (isset($data['id'])) { ?>
		<input type="text" name="id" value="<?php echo $data['id']?>" readonly>
		<input type="text" name="judul" value="<?php echo $data['judul']?>">
		<?php }else{ ?>
		<!-- <input type="text" name="id" disabled value=""> -->
		<input type="text" name="judul" value="">
		<?php }?>
		<input type="submit" value="submit">
	</form>
</body>
</html>