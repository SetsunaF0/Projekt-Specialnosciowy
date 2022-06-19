<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="pokemon">Nazwa</label>
		     <input type="pokemon"
		           class="form-control"
		           id="pokemon"
		           name="pokemon"
		           value="<?=$row['pokemon'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="poziom">Poziom</label>
		     <input type="poziom"
		           class="form-control"
		           id="poziom"
		           name="poziom"
		           value="<?=$row['poziom'] ?>" >
		   </div>

            <div class="form-group">
                <label for="sex">Płeć</label>
                <input type="sex"
                       class="form-control"
                       id="sex"
                       name="sex"
                       value="<?=$row['sex'] ?>" >
            </div>

            <div class="form-group">
                <label for="typ1">Typ pierwszy</label>
                <input type="typ1"
                       class="form-control"
                       id="typ1"
                       name="typ1"
                       value="<?=$row['typ1'] ?>" >
            </div>
            <div class="form-group">
                <label for="typ2">Typ drugi</label>
                <input type="typ2"
                       class="form-control"
                       id="typ2"
                       name="typ2"
                       value="<?=$row['typ2'] ?>" >
            </div>

            <div class="form-group">
                <label for="atak_s">Atak specialny</label>
                <input type="atak_s"
                       class="form-control"
                       id="atak_s"
                       name="atak_s"
                       value="<?=$row['atak_s'] ?>" >
            </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="home.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>