<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Gry komputerowe</title>
</head>
<body>
    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>

    <section id="left">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
            <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "gry";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if(!$conn) {
                    echo "Nie udało się połączyć z bazą MySQL";
                }

                $sql = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<li>" . $row["nazwa"] . " " . "<span>" . $row["punkty"] . "</span>" . "</li>";
                    }
                }
                mysqli_close($conn)
            ?>
        </ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał <p>Stronę wykonał: Bartłomiej Wepa 2PRO</p></h3>
    </section>

    <section id="middle">
        <?php
            $servername = "localhost"; 
            $username = "root";
            $password = "";
            $dbname = "gry";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$conn) {
                echo "Nie udało się połączyć z bazą MySQL";
            }

            $sql = "SELECT id, nazwa, zdjecie FROM gry;";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div>" .
                    "<img src='" . $row["zdjecie"] . "'" . "title='" . $row["id"] . "'" . "alt='" . $row["nazwa"] . "'" . ">" .
                    "<p>" . $row["nazwa"] . "</p>"
                    . "</div>";
                }
            }
            mysqli_close($conn)
        ?>
    </section>

    <section id="right">
        <h3>Dodaj nową grę</h3>
        <form action="gry.php" method="post">
            <p>nazwa</p>
            <input type="text" name="nazwa" id="nazwa">
            <p>opis</p>
            <input type="text" name="opis" id="opis">
            <p>cena</p>
            <input type="number" name="cena" id="cena">
            <p>zdjęcie</p>
            <input type="text" name="zdjecie" id="zdjecie">
            <input type="submit" value="DODAJ">
        </form>

        <?php
            $servername = "localhost"; 
            $username = "root";
            $password = "";
            $dbname = "gry";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$conn) {
                echo "Nie udało się połączyć z bazą MySQL";
            }


            if(isset($_POST["nazwa"]) == 1) {
                $nazwa = $_POST["nazwa"];
                if(strlen($nazwa) > 0) {
                    $opis = $_POST["opis"];
                    $cena = $_POST["cena"];
                    $zdjecie = $_POST["zdjecie"];
                    $sql = 'INSERT INTO gry(nazwa, opis, punkty, cena, zdjecie) VALUES(' . '"' . $nazwa . '"' . ',' . '"' . $opis . '"' . ',' . 0 . ',' . '"' . $cena . '"' . ',' . '"' . $zdjecie . '"' . ')';
                    $result = mysqli_query($conn, $sql);
                }
            }
        ?>
    </section>

    <footer>
        <form action="gry.php" method="post">
            <input type="text" name="wybor" id="wybor">
            <input type="submit" value="Pokaż opis">
        </form>

        <?php
            $servername = "localhost"; 
            $username = "root";
            $password = "";
            $dbname = "gry";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$conn) {
                echo "Nie udało się połączyć z bazą MySQL";
            }

            if(isset($_POST["wybor"]) == 1) {
                $wybor = $_POST["wybor"];
                if(strlen($wybor) > 0) {
                    $sql = "SELECT nazwa, LEFT(opis, 100), punkty, cena FROM gry WHERE id = " . $wybor;
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<h2>" . $row['nazwa'] . ", " . $row["punkty"] . " punktów, " . $row["cena"] . " zł" . "</h2>";
                            echo "<p>" . $row["LEFT(opis, 100)"] . "</p>";
                        }
                    }
                    mysqli_close($conn);
                }
            } else {
                
            }
        ?>
    </footer>
</body>
</html>