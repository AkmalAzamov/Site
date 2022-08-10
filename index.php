<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Личный кабинет</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    
    <?php  if (isset($_SESSION['username'])) : ?>
      <p> <br /> <strong>Добро пожаловать: </strong> <br> 
          
          <br /> <strong><?php echo $_SESSION['username']; ?></strong> <br>
          <br /> <strong> <label> Серия:</label></strong> <br>
          <?php echo $_SESSION['serias']; ?>
          <br /> <strong> <label> Номер:</label></strong> <br>
          <?php echo $_SESSION['number'];  ?>
          <br /> <strong> <label> Кем выдан:</label></strong> <br>
          <?php echo $_SESSION['whom'];  ?>
          <br /> <strong> <label> Когда выдан:</label></strong> <br> 
          <?php echo $_SESSION['whenissued']; ?> 
          <br /> <strong> <label> Email:</label></strong>
          <?php echo $_SESSION['email']; ?>
                </p>      
      <br />
      <a href='editprofile.php' title='Edit profile'>Редактировать профиль</a>
      <br />
      <p> <a href="index.php?logout='1'" style="color: red;">Выход</a> </p>
    <?php endif ?>

</div>
        
</body>

</html>