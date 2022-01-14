<!DOCTYPE html>
<html lang="en">
<head>
  <title> Add Distributor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Distributor | Add</h2>
  <br>
  <form action = "/addDistributors" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">name</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
  <label>City Name:</label>
  <select class="form-control" name="country">
    <option value="new york">new york</option>
    <option value="washington">washington</option>
  </select>
  <label>phone</label>
    <input type="number" class="form-control" placeholder="phone" name="mobile"><br>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email">
    
    <button type="submit"  value = "Add Distributor" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
