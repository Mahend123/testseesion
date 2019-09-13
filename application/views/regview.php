
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>

  	<a href="<?php echo base_url('login') ?>">Login</a>

  <form method="post" action="<?php echo base_url('user') ?>" enctype="multipart/form-data">

  <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" value="" name="name">
    </div>
   
   <div class="form-group">
      <label for="phone">phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" value="" name="phone">
    </div>



    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" value="" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" value="" name="password">
    </div>

    <div class="form-group">
      <label for="file">Image:</label>
      <input type="file" class="form-control" id="userfile" name="userfile">
    </div>

    <div class="form-group">
      <label for="role">Role:</label>
      <select  class="form-control" name="role">
	  <option value="admin">Admin</option>
	  <option value="manager">Manager</option>
	  <option value="user">User</option>
	</select>
    </div>

    
    <input type="submit" name="submit" value="Submit" class="btn btn-default">
  </form>
</div>

</body>
</html>