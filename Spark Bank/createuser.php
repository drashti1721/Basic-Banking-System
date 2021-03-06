<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
        button,input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}
.background {
  width: 100%;
  display: flex;
}

.container {
  flex: 0 1 700px;
  width: 100%;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #d9d9d9;
  border-radius: 15px;
  box-shadow: 5px 10px 10px rgba(0, 0, 0, .25);
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4abad9;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 5px;
  height: 5px;
  margin-left: 3px;
  border-radius: 8px;
  background: #d9d9d9;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}
.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.button {
  margin-bottom: 0;
  text-align: right;
  position: absolute;
  bottom: 30px;
  right:40px;
}

.app-form-control{
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #4abad9;
  color: #4abad9;
  font-size: 14px;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #4abad9;
}

.app-form-control:focus {
  border-bottom-color: #4abad9;
}

.app-form-button {
  background: none;
  border: none;
  margin-left: 20px;
  color: #666;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #262626;
}

@media screen and (max-width: 520px) {
  *{
    letter-spacing:1px;
  }
  .container{
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 40px;
  }
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 50px;
  }
  .app-form-button{
    margin-top:5px;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

    </style>
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script> alert('Hurray! User created');
        window.location='transfermoney.php';
      </script>";
                    
    }
  }
?>

<div class="navbar">
   <div class="logo">
      <a href="index.html"><img src="logo.png" width="100px"></a>
        </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">HOME</a></li>
              <li><a href="createuser.php">CREATE USER</a></li>
              <li><a href="transfermoney.php">TRANSFER MONEY</a></li>
              <li><a href="transactionhistory.php">TRANSACTION HISTORY</a></li>
              </ul>
      </nav>
</div>

<h2 class="text-center pt-4">CREATE USER</h2>
<br>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="createuser.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>