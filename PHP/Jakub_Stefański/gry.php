<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Top 5 gier w tym miesiącu</h1>
    </header>
    <main>
        <section id="lewy">
            <h3>Nasz sklep</h3>
            <?php
            
            $conn = mysqli_connect("localhost","root","","gry");
            $zapytanie = "SELECT nazwa, punkty from gry ORDER BY punkty DESC LIMIT 5;";
            $result = mysqli_query($conn, $zapytanie);
            while($row = mysqli_fetch_array($result)){
                print"<li>".$row['nazwa']."<span>". $row['punkty']."</span></li>";
            }
            mysqli_close($conn);
            ?>

            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>jakub stefanski</p>
        </section>
        <section id="srodkowy">
            <?php
            $conn = mysqli_connect("localhost","root","","gry");
            $zapytanie2 = "SELECT id, nazwa, zdjecie from gry;";
            $result2 = mysqli_query($conn, $zapytanie2);
            while($row2= mysqli_fetch_array($result2)){
                print"<div class='gra'>";
                print"<img src='".$row2['zdjecie']. 'alt='.$row2['nazwa']."'>";
                print"<p>".$row2['nazwa']."</p>";
                print"</div>";

            }
           
            ?>
        </section>
        <section id="prawy">
            <h3>Dodaj nową grę</h3>
            <form action="gry.php" method="post">
                <label>nazwa <input type="text" name="nazwa"></label> <br>
                <label>opis <input type="text" name="opis"></label> <br>
                <label>cena <input type="number" name="cena"></label> <br>
                <label>zdjecie <input type="text" name="zdjecie"></label> <br>
                <input type="submit" name="dodaj" value="dodaj">
            </form>

            <?php
            $conn = mysqli_connect("localhost","root","","gry");
            if(isset($_POST['dodaj'])){
                $nazwa = $_POST['nazwa'];
                $opis= $_POST['opis'];
                $cena = $_POST['cena'];
                $zdjecie = $_POST['zdjecie'];

            }
            $dodaj2 = "INSERT INTO gry(nazwa, opis, cena, zdjecie) VALUES ('$nazwa', '$opis', '$cena', '$zdjecie';)";
            mysqli_query($conn, $dodaj2);
            


        
            mysqli_close($conn)
            ?>


        </section>
    </main>
    <footer>
        <form action="gry.php" method="post">
            <input type="text" name="id">
            <input type="submit" value="pokaz opis">

        </form>
        <?php
        $conn = mysqli_connect("localhost","root","","gry");

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $zapytanie3 = "SELECT nazwa, opis, punkty, cena FROM gry WHERE id = $id;";
            $result3 = mysqli_query($conn, $zapytanie3);
            while($row3 = mysqli_fetch_array($result3)){
                print "<h2>".$row['nazwa'].",".$row['punkty'].",".$row['cena']."zl"."</h2>";
                print "<p>".$row['opis']."</p>";
            }
        }
        
        
        
        ?>
    </footer>
    
</body>
</html>