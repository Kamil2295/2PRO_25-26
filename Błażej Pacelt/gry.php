<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>

    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gry";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
    }
    ?>

    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>

    <main>
        <section id="left">
            <h3>Top 5 gier w tym miesiącu</h3>
            <ul>
            <?php 
            $sql = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row["nazwa"] . " <span id='points'>" . $row["punkty"] . "</span></li>";
            }
            ?>
            </ul>

            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>

            <h3>Stronę wykonał</h3>
            <p>00000000000</p>
        </section>

        <section id="mid">
            <?php 
            $sql = "SELECT id, nazwa, zdjecie FROM gry;";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo '<img src="' . $row["zdjecie"] . '" alt="' . $row["nazwa"] . '">';
                echo "<p>" . $row["nazwa"] . "</p>";
                echo "</div>";
            }
            ?>
            
        </section>

        <section id="right">
            <h3>Dodaj nową grę</h3>

            <form action="gry.php" method="post">

                <label for="nazwa" require>nazwa</label><br>
                <input type="text" name="nazwa" id="nazwa"><br>
                
                <label for="opis" require>opis</label><br>
                <input type="text" name="opis" id="opis"><br>

                <label for="cena" require>cena</label><br>
                <input type="text" name="cena" id="cena"><br>

                <label for="zdjecie" require>zdjęcie</label><br>
                <input type="text" name="zdjecie" id="zdjecie"><br>

                <input type="submit" value="DODAJ">
            </form>
            
            <?php
            

            if(isset($_POST["nazwa"])) {
                $nazwa = $_POST["nazwa"];
                $opis = $_POST["opis"];
                $cena = $_POST["cena"];
                $zdjecie = $_POST["zdjecie"];

                $sql = "INSERT INTO gry(nazwa, opis, cena, zdjecie, punkty) VALUES('$nazwa', '$opis', $cena, '$zdjecie', 0);";
                $result = mysqli_query($conn, $sql);
            }
            ?>
        </section>
    </main>

    <footer>
        <form action="gry.php" method="post">
            <input type="text" name="id" id="id">
            <input type="submit" value="Pokaż opis">
        </form>

        <?php
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
            $sql = "SELECT nazwa, LEFT(opis, 100) as opis, punkty, cena FROM gry WHERE id=" . $id . ";";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div>";
                    echo "<h3>" . $row["nazwa"] . ", " . $row["punkty"] . " punktów, " . $row["cena"] . " zł" . "</h3>";
                    echo "<p>" . $row["opis"] . "</p>";
                    echo "</div>";
                }
            }
        }
        
        ?>
    </footer>

    <?php 
    mysqli_close($conn);
    ?>
</body>
</html>