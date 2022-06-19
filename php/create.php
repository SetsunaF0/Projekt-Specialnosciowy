<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$pokemon= validate($_POST['pokemon']);
	$poziom = validate($_POST['poziom']);
    $sex = validate($_POST['sex']);
    $typ1 = validate($_POST['typ1']);
    $typ2 = validate($_POST['typ2']);
    $atak_s = validate($_POST['atak_s']);

	$user_data = 'pokemon='.$pokemon. '&poziom='.$poziom. '&sex='.$sex. '&typ1='.$typ1. '&typ2='.$typ2. '&atak_s='.$atak_s;

	if (empty($pokemon)) {
		header("Location: ../dodaj_pokemona.php?error=Nazwa jest wymagana&$user_data");
	}else if (empty($poziom)) {
		header("Location: ../dodaj_pokemona.php?error=Poziom jest wymagany&$user_data");
    }else if (empty($sex)) {
        header("Location: ../dodaj_pokemona.php?error=Płeć jest wymagana&$user_data");
    }else if (empty($typ1)) {
        header("Location: ../dodaj_pokemona.php?error=Typ pierwszy jest wymagany&$user_data");
    }else if (empty($typ2)) {
        header("Location: ../dodaj_pokemona.php?error=Typ drugi jest wymagany&$user_data");
    }else if (empty($atak_s)) {
        header("Location: ../dodaj_pokemona.php?error=Atak specialny jest wymagany&$user_data");
	}else {

       $sql = "INSERT INTO pokemon(pokemon, poziom, sex, typ1, typ2, atak_s) 
               VALUES('$pokemon', '$poziom', '$sex', '$typ1', '$typ2', '$atak_s')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../home.php?success=successfully created");
       }else {
          header("Location: ../dodaj_pokemona.php?error=unknown error occurred&$user_data");

       }
	}

}