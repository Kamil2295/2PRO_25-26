<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Ranging gier komputerowych</h1>
    </header>
    <main>
        <aside>
            <h3>Top 5 gier w tym miesiącu</h3>
            <ul>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "gry");
                if (!$conn) {
                    echo "Skrypt 1: Nie połączono z bazą";
                }
                // Skrypt 1
                $sql = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["nazwa"] . " " . "<a class='punkty'>" . $row["punkty"] . "</a></li>";
                    }
                    echo "</ul>";
                }
                mysqli_close($conn);
            ?>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>Krzysztof Wesołowski</p>
        </aside>
        <figure>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "gry");
                if (!$conn) {
                    echo "Skrypt 2: Nie połączono z bazą";
                }
                // Skrypt 2
                $sql = "SELECT id, nazwa, zdjecie FROM gry;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='blok'><img src='pliki1/" . $row["zdjecie"] . "' alt='" . $row["nazwa"] . "' title='" . $row["id"] . "'><p>" . $row["nazwa"] . "</p>";
                    }
                }
                mysqli_close($conn);
            ?>
        </figure>
        <aside>
            <h3>Dodaj nową grę</h3>
            <form action="gry.php" method="post">
                <label>nazwa</label>
                <input id="i-nazwa" type="text"> <br>
                <label>opis</label>
                <input id="i-opis" type="text"> <br>
                <label>cena</label>
                <input id="i-cena" type="text"> <br>
                <label>zdjęcie</label>
                <input id="i-zdjecie" type="text"> <br>
                <input id="i-submit" type="submit" value="DODAJ">
            </form>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "gry");
                if (!$conn) {
                    echo "Skrypt 4: Nie połączono z bazą";
                }
                // Skrypt 4
                if (isset($_POST["i-nazwa"])) {
                    $sql = "INSERT INTO gry(nazwa, opis, punkty, cena, zdjecie) VALUES (" . $_POST["i-nazwa"] . ", " . $_POST["i-opis"] . ", 0, " . $_POST["i-cena"] . ", " . $_POST["i-zdjecie"] . ");";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["nazwa"] . ", " . $row["punkty"] . " punktów, " . $row["cena"] . " zł</h3>";
                            echo "<p>" . $row["opis"] . "</p>";
                        }
                    }
                }
                mysqli_close($conn);
            ?>
        </aside>
    </main>
    <footer>
        <form action="gry.php" method="post">
            <input id="i-id" type="text">
            <input if="i-submit2" type="submit" value="Pokaż opis">
        </form>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "gry");
            if (!$conn) {
                echo "Skrypt 3: Nie połączono z bazą";
            }
            // Skrypt 3
            if (isset($_POST["i-id"])) {
                $sql = "SELECT nazwa, punkty, cena, opis FROM gry WHERE id = " . $_POST["i-id"] .  ";";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h3>" . $row["nazwa"] . ", " . $row["punkty"] . " punktów, " . $row["cena"] . " zł</h3>";
                        echo "<p>" . $row["opis"] . "</p>";
                    }
                }
            }
            
            mysqli_close($conn);
        ?>
    </footer>
    
</body>
</html>