<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Senilan</title>

</head>
<body>
<form method="POST">
    <p>Ime: <input type="text" name="ime">  <br> <br></p>
    <p>Prezime : <input type="text" name="prezime">  <br> <br></p>
    <p>email : <input type="text" name="mail">  <br> <br></p>
    <input type="submit" name="submit" value="Submit">



</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ime"])) {
        echo "Ime je obavezno","<br>";
    } else {
        $ime = ($_POST["ime"]);
        $datoteka = fopen("pes.txt", "a");
        fwrite($datoteka, $ime . " ");
        $ime = ($_POST["ime"]);
        if (preg_match("/^[a-zA-Z'. -]+$/", $ime)) {
            echo "Ime neispravno";
        }

    }
    if (empty($_POST["prezime"])) {
        echo "prezime je obavezno ","<br>";
    } else {
        $prezime = ($_POST["prezime"]);
        $datoteka = fopen("pes.txt", "a");
        fwrite($datoteka, $prezime . " ");
        $prezime = ($_POST["prezime"]);
        if (preg_match("/^[a-zA-Z'. -]+$/", $prezime)) {
            echo "Prezime neispravno";
        }
    }
    if (empty($_POST["mail"])) {
        echo "mail je obavezan ","<br>";
    } else {
        $mail = ($_POST["mail"]);
        $datoteka = fopen("pes.txt", "a");
        fwrite($datoteka, $mail . "\n");
        $mail = ($_POST["mail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Mail neispravan";
        }

    }


}
?>
</body>
</html>