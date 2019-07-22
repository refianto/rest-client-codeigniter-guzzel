<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td><a href="/books/form">Add</a></td>
			<td></td>
		</tr>
		<?php foreach ($datas as $data) {?>
		<tr>
			<td><?php echo $data->id ?></td>
			<td><?php echo $data->judul ?></td>
			<td><a href="/books/form/<?php echo $data->id ?>">Edit</a></td>
			<td><a href="/books/delete/<?php echo $data->id ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>