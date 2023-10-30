<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
        <?php include 'header.php';?>
</head>

<body>
<div class="logocont" id="logocont">
    <img src="./images/pngegg.png" alt="" id="img" >
  
       <span id="s" >S</span>
       <span id="a"> A</span>
       <span id="k">K</span>
       <span id="u"> U</span>
       <span id="r"> R</span>
       <span id="a2">A</span>
   
</div>
    <div class="container" style="max-width:800px">
<form action="env.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Site Name</label>
    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Your Site name" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">DB Name</label>
    <input type="text" class="form-control" name="dbname" id="formGroupExampleInput2" placeholder="Database name">
    <input type="radio" value="create" name="createdb">
    <label>Create db also </label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DB User Name</label>
    <input type="text" class="form-control" name="uname" id="exampleInputEmail1" aria-describedby="emailHelp" value="root" placeholder="Database user name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">DB Password</label>
    <input type="password" class="form-control" name="pw" id="exampleInputPassword1" placeholder="Database Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DB HOST</label>
    <input type="text" class="form-control" name="dbhost" value="127.0.0.1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DB Port</label>
    <input type="text" class="form-control" name="dbport" value="3306" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-primary">Continue</button>
</form>
</div>
</body>
</html>