<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry Komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header><h1>Ranking gier komputerowych</h1></header>
    <main>
        <section id="left"><h3>Top 5 gier w tym miesiącu</h3>
            <?php
            #skrypt1
                $coon=mysqli_connect("localhost", "root", "", "gry") ;

                $sql = 'SELECT nazwa,punkty from gry ORDER by punkty DESC LIMIT 5';
                $wynik=mysqli_query($coon, $sql) ;
                $row = mysqli_fetch_array($wynik);
                $ilosc = mysqli_num_rows($wynik) ;
                echo"<ul>";
                if(mysqli_num_rows($wynik)>0){
                while($row=$wynik->fetch_assoc())
                
                { 
                    echo"<li>".$row["nazwa"]."<a style='background-color: tomato;border-radius: 50%;padding: 5px;'>".$row["punkty"]."</a></li>";
                }
                
                }
                echo"</ul>";
                mysqli_close($coon);
            ?>
            
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl ">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>Adam Pawłowski</p>
    </section>
        <section id="center"><?php
        #skrypt 2
        $coon=mysqli_connect("localhost", "root", "", "gry") ;

                $sql="SELECT id,nazwa,zdjecie from gry";
                $wynik=mysqli_query($coon, $sql) ;
                $row = mysqli_fetch_array($wynik);
                $ilosc = mysqli_num_rows($wynik) ;
                echo"<div style='display: flex;flex-direction: collumn;flex-wrap: wrap;padding: 3px;text-align: center;'";
                while($row=$wynik->fetch_assoc())
                
                { 
                    echo"<a>";
                    echo"<img src=".$row["zdjecie"]." "."alt=".$row["nazwa"]."><p>".$row["nazwa"]."</p>";
                    echo"</a>";
                }
                echo"</div>";
                mysqli_close($coon);
        


        ?>
        </section>
        <section id="right"><h3>Dodaj nową grę</h3>
        <form action="post">
            
            <label >nazwa <br><input type="text"> </label><br>
            <label >opis <br><input type="text"></label><br>
            <label >cena <br><input type="text"></label><br>
            <label >zdjęcie <br><input type="text"></label><br>
            <input type="submit" value="DODAJ">
            <?php
            #scypt 4
            $coon=mysqli_connect("localhost", "root", "", "gry") ;

                $sql = 'Insert';
                $wynik=mysqli_query($coon, $sql) ;
      

                mysqli_close($coon);
            ?>
            </section>
        </form>
    </main>
    <footer><form action="post">
        <input type="text"><input type="submit" value="Pokaż opis">
    </form>
<?php
#skrypt3
$coon=mysqli_connect("localhost", "root", "", "gry") ;

                $sql = 'SELECT nazwa,punkty from gry ORDER by punkty DESC LIMIT 5';
                $wynik=mysqli_query($coon, $sql) ;
                $row = mysqli_fetch_array($wynik);
                $ilosc = mysqli_num_rows($wynik) ;
                echo"<ul>";
                while($row=$wynik->fetch_assoc())
                
                { 
                    echo"";
                    
                }
                
                echo"</ul>";
                mysqli_close($coon);
?>
</footer>
</body>
</html>