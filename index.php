<!DOCTYPE html>
<html>
<head>
	<title>Logowanie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Zaloguj się</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nazwa użytkownika</label>
     	<input type="text" name="uname" placeholder="Nazwa użytkownika"><br>

     	<label>Hasło</label>
     	<input type="password" name="password" placeholder="Hasło"><br>

     	<button type="submit">Zaloguj</button>
          <a href="signup.php" class="ca">Stwórz konto</a>
     </form>
</body>
</html>