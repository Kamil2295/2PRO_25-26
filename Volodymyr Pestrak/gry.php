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
        <?php
        $server="localhost";
        $user="root";
        $password="";
        $dbname="gry";

        $conn=mysqli_connect($server, $user, $password, $dbname);

        if(!$conn){
            echo "Nie udało się połączyć z bazą";
        }

        $sql="SELECT nazwa, punkty FROM gry ORDER BY punkty desc limit 5;";

        $result=mysqli_query($conn, $sql);
        echo "<ul>";
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<li>" . $row["nazwa"] . " <span class='punkty_list'>" . $row["punkty"] . "</span></li>";
            }
        }else{
            echo "Baza nie zwróciła żadnych wierszy";
        }
        echo "</ul>";

        mysqli_close($conn);
        ?>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał: </h3>
        <p>00000000000</p>
    </section>
    <section id="center">
        <?php
        $server="localhost";
        $user="root";
        $password="";
        $dbname="gry";

        $conn=mysqli_connect($server, $user, $password, $dbname);

        if(!$conn){
            echo "Nie udało się połączyć z bazą";
        }

        $sql="SELECT id, nazwa, zdjecie FROM gry;";

        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<section class='block_img'>";
                echo "<img src='" . $row["zdjecie"] . "' alt='" . $row["nazwa"] . "' title='" . $row["id"] ."'>";
                echo "<p>" . $row["nazwa"] . "</p>";
                echo "</section>";
            }
        }else{
            echo "Baza nie zwróciła żadnych wierszy";
        }

        mysqli_close($conn);
        ?>
    </section>
    <section id="right">
        <h3>Dodaj nową grę</h3>

        <form method="post">
            <label for="nazwa">nazwa</label>
            <input type="text" id="nazwa" name="nazwa" required>

            <label for="opis">opis</label>
            <input type="text" id="opis" name="opis">

            <label for="cena">cena</label>
            <input type="text" id="cena" name="cena">

            <label for="zdjecie">zdjęcie</label>
            <input type="text" id="zdjecie" name="zdjecie">

            <input type="submit" value="DODAJ">

        </form>

        <?php
        $server="localhost";
        $user="root";
        $password="";
        $dbname="gry";

        $conn=mysqli_connect($server, $user, $password, $dbname);

        if(!$conn){
            echo "Nie udało się połączyć z bazą";
        }

        if(!empty($_POST["nazwa"])){
            $nazwa=$_POST["nazwa"];
            $opis=$_POST["opis"];
            $cena=$_POST["cena"];
            $zdjecie=$_POST["zdjecie"];

            $sql="INSERT INTO gry (nazwa, opis, punkty, cena, zdjecie) values ('$nazwa', '$opis', '0', '$cena', '$zdjecie');";

            if(mysqli_query($conn, $sql)){
                
            }else{

            }
        }
        

        

        mysqli_close($conn);
        ?>

    </section>
        
    <footer>
        <form method="post">
            <input type="text" id="id" name="id">
            <input type="submit" value="Pokaż opis">
        </form>

        <?php
        $server="localhost";
        $user="root";
        $password="";
        $dbname="gry";

        $conn=mysqli_connect($server, $user, $password, $dbname);

        if(!$conn){
            echo "Nie udało się połączyć z bazą";
        }

        if(!empty($_POST["id"])){
            $id=$_POST["id"];
            $sql="SELECT nazwa, substr(opis, 1, 100), punkty, cena FROM gry WHERE id=$id;";

            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){

                    echo "<h2>" . $row["nazwa"] . ", " . $row["punkty"] . " punktów, " . $row["cena"] . " zł </h2>";
                    echo "<p>" . $row["substr(opis, 1, 100)"] . "</p>";

                }
            }else{
                echo "Baza nie zwróciła żadnych wierszy";
            }
        }
        

        

        mysqli_close($conn);
        ?>

    </footer>
</body>
</html>