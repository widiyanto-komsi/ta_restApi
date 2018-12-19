<?php
	include 'user-get-api.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
   <br />
   <h2>User Information</h2>
   <br>
   <a href="add.php" class="btn btn-info">Add New User</a>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php
		if(count($response)){ 
			$no = 1;
      		for ($i=0; $i < count($response); $i++) { ?>
		      <tr>
		        <td><?php echo $no++; ?></td>
		        <td><?php echo $response[$i]->name; ?></td>
		        <td><?php echo $response[$i]->email; ?></td>
            <td>
                <a href="edit.php?id=<?=$d->id?>" class="btn btn-primary">Edit</a>
                <a href="delete.php?id=<?=$d->id?>" class="btn btn-danger">Delete</a>
            </td>
		      </tr>
		<?php 
  			}
  		}else{ ?>
  			<tr>
		        <td colspan='5'>No Data</td>
		      </tr>
  		<?php } ?>
	</tbody>
  </table>
</div>

</body>
</html>
<script>
	/* setTimeout(function(){
	   window.location.reload(1);
	}, 1000); */
</script>