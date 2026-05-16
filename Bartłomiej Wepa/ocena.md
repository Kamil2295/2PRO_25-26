# Raport z egzaminu zawodowego INF.03
**Uczeń:** Bartłomiej Wepa

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwerendy.txt` obecny z czterema zapytaniami. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 1/1 | Poprawna składnia, zrzut ekranu `kw1.png` obecny. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 1/1 | Poprawna składnia, zrzut ekranu `kw2.png` obecny. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 1/1 | Poprawna składnia, zrzut ekranu `kw3.png` obecny. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 1/1 | Poprawna składnia INSERT, zrzut ekranu `kw4.png` obecny. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji (zrzutu ekranu lub metadanych) potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 1/1 | `lang="pl"`, `charset="UTF-8"`, tytuł „Gry komputerowe" – wszystko poprawne. |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | Lista `ul/li` generowana przez Skrypt 1. |
| R.2.7 – Formularze z etykietami (label) | 0/1 | Formularz dodawania gry używa tagów `<p>` zamiast `<label>` do opisów pól (`<p>nazwa</p>`) – brak powiązanych etykiet. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt='"` poprawnie ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 1/1 | `title='"` ustawiony jako id w Skrypcie 2. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | Float zastosowany dla trzech sekcji obok siebie, `clear: both` w footer. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 1/1 | `href="http://sklep.gry.pl"` poprawny. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Poprawnie zdefiniowane. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `span { background-color: Tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | Poprawnie ustawione. |
| R.4.5 – Media queries dla 800 px | 0/1 | Brak reguły `@media` w pliku styl.css – brak responsywności. |
| R.4.6 – Wyrównanie tekstu (text-align) | 1/1 | `text-align: center` dla `div` (bloki gier). |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding zdefiniowany w kilku elementach. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: scroll` na `#middle`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `span { border-radius: 50% }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 1/1 | `div { float: left; text-align: center; padding: 3px; }` pełni rolę klasy bloków gier. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` poprawne we wszystkich skryptach. |
| R.5.2 – Zamknięcie połączenia | 0/1 | Brak `mysqli_close()` po Skrypcie 4 – połączenie nie jest zamykane po dodaniu rekordu. |
| R.5.3 – Zapytania SQL w skryptach | 1/1 | Skrypty używają poprawnych zapytań SQL. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `isset($_POST["nazwa"]) == 1` i `strlen($nazwa) > 0` – walidacja obecna. |
| R.5.5 – Użycie tablic $_POST | 1/1 | `$_POST["nazwa"]`, `$_POST["wybor"]` używane. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 poprawnie generuje listę. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 1/1 | Skrypt 2 poprawnie wyświetla galerię z alt i title. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 1/1 | Skrypt 3 poprawnie wyszukuje po `$_POST["wybor"]` i wyświetla nazwę, opis (100 znaków), punkty, cenę. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 1/1 | Skrypt 4 wykonuje poprawny INSERT do bazy. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$servername`, `$conn`, `$sql`, `$result`, `$row`, `$wybor` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 34 / 41
- **Wynik procentowy:** 82,9%
- **Status:** ✅ ZALICZONY (Próg zaliczenia: 70%)
