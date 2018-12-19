<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add User</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pwd">Nama:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
    <input type="submit" class="btn btn-default" name="aksi" value="tambah">
  </form>
</div>
</body>
</html>

<?php
  if(@$_POST['aksi'] == 'tambah'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://tugasharisenin.herokuapp.com/register");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "name=$name&email=$email&password=$password");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);

    $message = json_decode($server_output)->message; 
    echo "<h2 class='text-center'>$message</h2>";
    curl_close ($ch);
  }
?>