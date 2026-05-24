# Raport z egzaminu zawodowego INF.03
**Uczeń:** Rafał Lewczuk

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 0/1 | Plik `kwerendy.txt` jest całkowicie pusty. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 0/1 | Brak treści w kwerendy.txt. Zrzut `kw1.jpg` obecny, ale brak zapytania w pliku. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 0/1 | Brak treści w kwerendy.txt. Zrzut `kw2.jpg` obecny, ale brak zapytania w pliku. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 0/1 | Brak treści w kwerendy.txt. Zrzut `kw3.jpg` obecny, ale brak zapytania w pliku. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 0/1 | Brak treści w kwerendy.txt. Zrzut `kw4.jpg` obecny, ale brak zapytania w pliku. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 0/1 | Tytuł strony to „Gry Komputerowe" (wielka litera K) – niezgodność z wymaganiem „Gry komputerowe". |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | `<ul>` z `<li>` generowanymi przez Skrypt 1 obecna. |
| R.2.7 – Formularze z etykietami (label) | 0/1 | Formularz dodawania gry nie posiada etykiet `<label>` – tylko pola `<input>` bez opisów. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt=` ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 1/1 | `title=` (id) ustawiony w Skrypcie 2. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | `float: left/right` zastosowany dla sekcji bocznych i środkowej, `clear: both` w footer. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 0/1 | `href="http://sklep.gry.pl "` – spacja na końcu URL, nieprawidłowy link. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 0/1 | `<form method="$_POST">` – nieprawidłowa wartość atrybutu method. Formularz nie wyśle danych metodą POST. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Poprawnie zdefiniowane. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `.list_punktow { background-color: tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | `height: 600px` i `height: 150px` zdefiniowane. |
| R.4.5 – Media queries dla 800 px | 0/1 | `@media screen and (min-width: 800px)` zdefiniowane, ale selektory `#center, #left, #right` nie odpowiadają ID w HTML (`#lewy, #srodek, #prawy`) – reguła nie działa. |
| R.4.6 – Wyrównanie tekstu (text-align) | 0/1 | Brak `text-align: center` dla nagłówka. `.blokimg { text-align: center; }` obecne dla bloków galerii. Brak wyrównania w header. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding i margin obecne. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: auto` na `#srodek`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `.list_punktow { border-radius: 50%; }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 1/1 | Klasa `.blokimg` zdefiniowana w CSS i używana w PHP. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` poprawne. |
| R.5.2 – Zamknięcie połączenia | 0/1 | `mysqli_close($conn)` wywoływane wewnątrz pętli `while` w Skryptach 1 i 2 – połączenie zamykane po pierwszej iteracji. |
| R.5.3 – Zapytania SQL w skryptach | 0/1 | INSERT w Skrypcie 4: `VALUES('$nazwa', '$opis', '$cena', '$zdjecie')` – brak wartości `punkty`, nieprawidłowa kolejność (cena przed zdjecie), błąd SQL. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `isset($_POST['nazwa'])` i `isset($_POST['id'])` z warunkami AND – walidacja obecna. |
| R.5.5 – Użycie tablic $_POST | 0/1 | Formularz dodawania ma `method="$_POST"` – dane nie zostaną przesłane, `$_POST` będzie puste. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 0/1 | `mysqli_close($conn)` wewnątrz pętli while – pętla przerwie się po pierwszym wierszu. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 0/1 | `mysqli_close($conn)` wewnątrz pętli while – ta sama wada. Ponadto błąd składni PHP w Skrypcie 2. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | Skrypt 3 używa `$conn` bez nowego połączenia, a poprzednie połączenia są zamknięte wewnątrz pętli. Dodatkowo błąd w echo: `."zł></h2>"` – cudzysłów po `zł` jest wewnątrz stringa, co łamie HTML. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 0/1 | INSERT błędny (brak `punkty`), formularz nie wysyła POST. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$server`, `$user`, `$conn`, `$sql`, `$result`, `$row`, `$nazwa` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 21 / 41
- **Wynik procentowy:** 51,2%
- **Status:** ❌ NIEZALICZONY (Próg zaliczenia: 70%)
