<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Регистрация пользователя</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Регистрация</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>ФИО</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
      <label>Паспортные данные:</label> 
    
      <label>Серия:</label>     
      
        <input type="text" name="serias" value="<?php echo $serias; ?>">
    
      <label>Номер:</label>  
    
        <input type="text" name="number" value="<?php echo $number; ?>">

      <label>Кем выдан:</label>     

        <input type="text" name="whom" value="<?php echo $whom; ?>">

      <label>Когда выдан:</label> 

       <input type="date" name="whenissued" value="<?php echo $whenissued; ?>">

    
    </div>

  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Подтвердите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Зарегистрироватся</button>
  	</div>
    <div class="input-group">
  	<button> <a type="submit" class="btn"
  		href="login.php">Войти <a/>
  	</button>
  </div>
  </form>
</body>
</html>