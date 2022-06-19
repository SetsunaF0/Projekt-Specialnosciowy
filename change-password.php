<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zmień hasło</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="change-p.php" method="post">
     	<h2>Zmień hasło</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Stare hasło</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Stare hasło">
     	       <br>

     	<label>Nowe hasło</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="Nowe hasło">
     	       <br>

     	<label>Potwierdź nowe hasło</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Potwierdź nowe hasło">
     	       <br>

     	<button type="submit">Zmień</button>
          <a href="home.php" class="ca">Strona główna</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>