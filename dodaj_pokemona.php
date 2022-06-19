<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Dodaj</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="body">


    <!-- Content -->
    <div id="content">
        <div class="inner">


            <!-- Sidebar -->
            <div id="sidebar">
                <h1>Witaj Trenerze, <?php echo $_SESSION['name']; ?></h1>

                <!-- Logo -->
                <h1 id="logo"><a href="#">POKEDEX</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="#">Dodaj pokemona</a></li>
                        <li><a href="home.php">Strona główna</a></li>
                        <li><a href="read.php">Moje pokemony</a></li>



                    </ul>

                    <nav class="home-nav">
                        <a href="change-password.php">Zmień hasło</a>
                        <a href="logout.php">Wyloguj</a>
                    </nav>
                </nav>

            </div>

            <div class="container">
                <form action="php/create.php"
                      method="post">

                    <h4 class="display-4 text-center">Dodaj Pokemona</h4><hr><br>
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
                               value="<?php if(isset($_GET['pokemon']))
                                   echo($_GET['pokemon']); ?>"
                               placeholder="Wpisz nazwę pokemona">
                    </div>

                    <div class="form-group">
                        <label for="poziom">Poziom</label>
                        <input type="poziom"
                               class="form-control"
                               id="poziom"
                               name="poziom"
                               value="<?php if(isset($_GET['poziom']))
                                   echo($_GET['poziom']); ?>"
                               placeholder="Wpisz poziom pokemona">
                    </div>

                    <div class="form-group">
                        <label for="sex">Płeć</label>
                        <input type="sex"
                               class="form-control"
                               id="sex"
                               name="sex"
                               value="<?php if(isset($_GET['sex']))
                                   echo($_GET['sex']); ?>"
                               placeholder="Wpisz płeć pokemona">
                    </div>

                    <div class="form-group">
                        <label for="typ1">Typ pierwszy</label>
                        <input type="typ1"
                               class="form-control"
                               id="typ1"
                               name="typ1"
                               value="<?php if(isset($_GET['typ1']))
                                   echo($_GET['typ1']); ?>"
                               placeholder="Wpisz pierwszy typ pokemona">
                    </div>

                    <div class="form-group">
                        <label for="typ2">Typ drugi</label>
                        <input type="typ2"
                               class="form-control"
                               id="typ2"
                               name="typ2"
                               value="<?php if(isset($_GET['typ2']))
                                   echo($_GET['typ2']); ?>"
                               placeholder="Wpisz drugi typ pokemona">
                    </div>

                    <div class="form-group">
                        <label for="atak_s">Atak specialny</label>
                        <input type="atak_s"
                               class="form-control"
                               id="atak_s"
                               name="atak_s"
                               value="<?php if(isset($_GET['atak_s']))
                                   echo($_GET['atak_s']); ?>"
                               placeholder="Wpisz atak specialny pokemona">
                    </div>



                    <button type="submit"
                            class="btn btn-primary"
                            name="create">Dodaj</button>
                    <a href="read.php" class="link-primary">Zobacz</a>
                </form>
            </div>

        </div>
    </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


    </body>
    </html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
 ?>