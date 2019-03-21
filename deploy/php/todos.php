<html>
<head>

</head>

<body>

<?php

$link = new PDO('mysql:host=localhost;dbname=tableronovatec', 'root', ''); 
?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>EMAIL</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from user') as $row){  ?> 
<tr>
	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['fullname'] ?></td>
	<td><?php echo $row['email'] ?></td>
    
 </tr>
<?php
	}
?>
</table>


</body>
</html>