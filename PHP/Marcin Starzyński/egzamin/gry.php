<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Gry Komputerowe</title>
</head>
<body>
    <header>
    <h1>Ranking gier komputerowych</h1>
    </header>

    <section id="lewa">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
        <?php
$conn = mysqli_connect('localhost', 'root', '', 'gry');
$zapytanie3 = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5";
$wynik3 = mysqli_query($conn, $zapytanie3);
while($wiersz = mysqli_fetch_array($wynik3)) {
    echo"<li>".$wiersz['nazwa']."<span>".$wiersz['punkty']."</span>"."</li>";
    mysqli_close($conn);
}

?>
        </ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl ">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>Marcin Starzyński</p>
    </section>
    <section id="srodek">
        <?php 
        $conn = mysqli_connect('localhost', 'root', '', 'gry');
        $podzap1 = "SELECT id, nazwa, zdjecie FROM gry";
        $wynik1 = mysqli_query($conn, $podzap1);
        while($wiersz = mysqli_fetch_array($wynik1)){
            echo"<div class='gra'>";
            echo"<img src ='".$wiersz['zdjecie']."' alt='".$wiersz['nazwa']."' title='".$wiersz['id']."'>";
            echo "<p>".$wiersz['nazwa."</p>"'];
            echo"</div>";
            mysqli_close($conn);
        }
        ?>
    </section>
    <section id="prawo">
        <h3>Dodaj nową grę</h3>
        <form action="gry.php" method="post">
            <input type="text" name="nazwa" id="nazwa">
            <input type="text" name="opis" id="opis">
            <input type="text" name="cena" id="cena">
            <input type="text" name="zdjecie" id="zdjecie">
            <input type="button" value="DODAJ">
        </form>
        <?php 
        $conn = mysqli_connect('localhost', 'root', '', 'gry');
        if(isset($_POST['nazwa']) &&
            isset($_POST['opis']) &&
            isset($_POST['cena']) &&
            isset($_POST['zdjecie'])){

                $nazwa = $_POST['nazwa'];
                $opis = $_POST['opis'];
                $cena = $_POST['cena'];
                $zdjecie = $_POST['zdjecie'];

                $dodaj = "INSERT INTO gry(nazwa, opis, punkty, cena, zdjecie) VALUES('$nazwa', '$opis', '$cena', '$zdjecie')";
            }
        mysqli_query($conn, $dodaj);
        mysqli_close($conn)
        ?>
    </section>
    <footer>
<form action="gry.php" method="post">
    <input type="text" name="id">
    <input type="submit" value="Pokaż opis">
</form>
<?php 
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $podzap2 = ("SELECT nazwa, opis, punkty, cena FROM gry where id = $id");
    $wynik2 = mysqli_query($conn, $podzap2);
    while($wiersz = mysqli_fetch_array($wynik2)){
        echo "<h2>".$wiersz['nazwa'].", ".$wiersz['punkty']." punktów, ".$wiersz['cena']." zł></h2>";
        echo "<p>".$wiersz['opis']."</p>";
    }
}
mysqli_close($conn);
?>
    </footer>
</body>
</html>