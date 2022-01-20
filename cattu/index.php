<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cattu</title>
</head>
<body>

<!--<h1>Dzień dobry użytykowniku!</h1>

<h2>Formularz</h2>

CELE:
RAPORT(podsumowanie danych przez usera informacji)
WYGLĄD STRONY ew. animacje
-->
    <form method="POST" action="index.php">
        <label for="tytul">
            Tytuł: 
            <input type="text" name="tytul" id="tytul" required>
        </label><br>
        <label for="autor">
            Autor: 
            <input type="text" name="autor" id="autor" required>
        </label><br>
        <label for="data">
            Dzień: 
            <input type="date" name="data" id="data" required>
        </label><br>
        <label for="pora">
            Czas:
            <input type="time" name="pora" id="pora" required>
        </label><br>
        <label for="samo">
            Twoje samopoczucie:
            <select name="samo" id="samo" required>
                <option selected disabled hidden>Wybierz</option>
                <option name="radosc" id="radosc">Radość</option>
                <option name="smutek" id="smutek">Smutek</option>
                <option name="gniew" id="gniew">Gniew</option>
                <option name="wzruszenie" id="wzruszenie">Wzruszenie</option>
                <option name="wyluzowanie" id="wyluzowanie">Wyluzowanie</option>
                <option name="szczescie" id="szczescie">Szczęście</option>
                <option name="nostalgia" id="nostalgia">Nostalgia</option>
            </select>
        </label><br>
        <input type="reset" value="WYCZYŚĆ">
        <input type="submit" value="DODAJ">
    </form>
    <p>
        <?php
            if(isset($_POST['tytul'])&&isset($_POST['autor'])&&isset($_POST['data'])&&isset($_POST['pora'])&&isset($_POST['samo'])){
                $tytul = $_POST['tytul'];
                $autor = $_POST['autor'];
                $data = $_POST['data'];
                $pora = $_POST['pora'];
                $time0 = "00:00:00";
                $time6 = "06:00:00";
                $time10 = "10:00:00";
                $time12 = "12:00:00";
                $time16 = "16:00:00";
                $time20 = "20:00:00";
                $time24 = "23:59:59";
                if($pora>=$time0&&$pora<$time6){
                    $pora = "noc"; echo $pora;
                } elseif($pora>=$time6&&$pora<$time10){
                    $pora = "rano"; echo $pora;
                } elseif($pora>=$time10&&$pora<$time12){
                    $pora = "przedpołudnie"; echo $pora;
                } elseif($pora>=$time12&&$pora<$time16){
                    $pora = "popołudnie"; echo $pora;
                } elseif($pora>=$time16&&$pora<$time20){
                    $pora = "późne popołudnie/wczesny wieczór"; echo $pora;
                } elseif($pora>=$time20&&$pora<$time24){
                    $pora = "wieczór"; echo $pora;
                } else {$pora = "KATASTROFA!"; echo $pora;};
                $samo = $_POST['samo'];
                $con = mysqli_connect('localhost','root','','muzyka') or die('Błąd połączenia!');
                $query = "INSERT INTO `jan`(`tytul`, `autor`, `data`, `pora_dnia`, `samopoczucie`) VALUES ('$tytul','$autor','$data','$pora','$samo')";
                mysqli_query($con,$query) or die("Błąd kwerendy!");
                echo "Udało się wysłać:<br>$query";
                mysqli_close($con);
            } else{
                echo "Nic tu nie zaszło. Nic.";
            }
            
        ?>
    </p>
</body>
</html>