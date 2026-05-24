# Raport z egzaminu zawodowego INF.03
**Uczeń:** Volodymyr Pestrak

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwerendy.txt` zawiera cztery zapytania – poprawne. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw1.jpg` obecny. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100)/substr(opis,1,100), punkty, cena WHERE id=1 (z dokumentacją) | 1/1 | Użyto `substr(opis, 1, 100)` – funkcjonalnie równoważne z `LEFT()`. Zrzut `kw2.jpg` obecny. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw3.jpg` obecny. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 1/1 | Zapytanie poprawne (cudzysłowy przy liczbach to dopuszczalna niejawna konwersja w SQL), zrzut `kw4.jpg` obecny. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji (zrzutu ekranu) potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 1/1 | `lang="pl"`, `charset="UTF-8"`, tytuł „Gry komputerowe" – wszystko poprawne. |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | `<ul>` i `<li>` generowane przez Skrypt 1 poprawnie. |
| R.2.7 – Formularze z etykietami (label) | 1/1 | Etykiety `<label for="...">` poprawnie powiązane z polami w formularzu dodawania. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt=` poprawnie ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 1/1 | `title=` (id) ustawiony w Skrypcie 2. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | `float: left/right` z `clear: both` w footer – poprawny układ. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 1/1 | `href="http://sklep.gry.pl"` poprawny (bez spacji). |
| R.3.4 – Formularz dodawania gry wysyła POST | 1/1 | `<form method="post">` – bez action wysyła do bieżącego pliku (gry.php), poprawne. |
| R.3.5 – Formularz wyszukiwania wysyła POST | 1/1 | `<form method="post">` – poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Poprawnie zdefiniowane. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `.punkty_list { background-color: tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | `height: 600px` i `height: 150px` zdefiniowane. |
| R.4.5 – Media queries dla 800 px | 1/1 | `@media screen and (max-width: 800px) { #center, #left, #right { width: 100%; } }` – sekcje pionowo przy ekranie ≤800px, poziomo powyżej 800px. Zgodne z wymaganiem. |
| R.4.6 – Wyrównanie tekstu (text-align) | 1/1 | `.block_img { text-align: center; }` dla bloków galerii. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding w różnych elementach (`header`, `.block_img`). |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: auto` na `#center`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `.punkty_list { border-radius: 50%; }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 1/1 | Klasa `.block_img` zdefiniowana i używana w PHP. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` poprawne we wszystkich skryptach. |
| R.5.2 – Zamknięcie połączenia | 1/1 | `mysqli_close($conn)` poprawnie wywoływane po każdym bloku. |
| R.5.3 – Zapytania SQL w skryptach | 1/1 | Wszystkie zapytania SQL poprawne składniowo. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `!empty($_POST["nazwa"])` i `!empty($_POST["id"])` – walidacja obecna i poprawna. |
| R.5.5 – Użycie tablic $_POST | 1/1 | `$_POST["nazwa"]`, `$_POST["id"]` poprawnie używane. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 poprawnie generuje listę Top 5. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 1/1 | Skrypt 2 poprawnie wyświetla galerię z alt i title. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | Skrypt 3 używa `$row["substr(opis, 1, 100)"]` jako klucz – w MySQL przy `SELECT substr(opis, 1, 100)` bez aliasu, klucz wynikowy to dokładnie `substr(opis, 1, 100)`. Technicznie zadziała, ale wyświetlenie danych zawiera błąd: formatowanie `", ".$row["punkty"]."punktow,"` – brak spacji przed „punktów". Punkt odejmowany za nieścisłość wyświetlania. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 1/1 | INSERT poprawny, walidacja `!empty()` obecna. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$server`, `$user`, `$conn`, `$sql`, `$result`, `$row`, `$nazwa` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 39 / 41
- **Wynik procentowy:** 95,1%
- **Status:** ✅ ZALICZONY (Próg zaliczenia: 70%)
