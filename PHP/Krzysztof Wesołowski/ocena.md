# Raport z egzaminu zawodowego INF.03
**Uczeń:** Krzysztof Wesołowski

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwerendy.txt` zawiera cztery zapytania. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw1.jpg` obecny. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw2.jpg` obecny. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw3.jpg` obecny. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw4.jpg` obecny. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji (zrzutu ekranu) potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 0/1 | `lang="en"` zamiast `lang="pl"` – błąd deklaracji języka strony. |
| R.2.4 – Semantyczne tagi: header, section, footer | 0/1 | Zamiast `<section>` użyto `<aside>` i `<figure>` – brak wymaganego tagu `section`. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 0/1 | Elementy `<li>` generowane są przez Skrypt 1, lecz brak owijającego tagu `<ul>` w HTML (ul zamknięty wewnątrz warunku if, lecz poza pętlą – po liście, nie przed nią; generowany kod jest niekompletny). |
| R.2.7 – Formularze z etykietami (label) | 1/1 | Elementy `<label>` obecne w formularzu. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt=` poprawnie ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 1/1 | `title=` (id) ustawiony w Skrypcie 2. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | `main { display: flex; }` – sekcje wyświetlane obok siebie. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 1/1 | `href="http://sklep.gry.pl"` poprawny. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 0/1 | Pola formularza mają jedynie atrybut `id`, brak atrybutu `name` – dane nie zostaną przesłane przez POST. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 0/1 | Pole wyszukiwania `<input id="i-id">` nie ma atrybutu `name` – dane nie zostaną przesłane przez POST. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Poprawnie zdefiniowane (aside=indigo, figure=black, footer=indigo). |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `.punkty { background-color: tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | `height: 600px` i `height: 150px` zdefiniowane. |
| R.4.5 – Media queries dla 800 px | 0/1 | `@media screen {}` – pusta reguła media bez żadnych właściwości, brak warunku `min-width`/`max-width`. |
| R.4.6 – Wyrównanie tekstu (text-align) | 0/1 | Brak zdefiniowanego `text-align` dla bloków galerii lub nagłówka. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding i margin obecne. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: scroll` na `figure`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `.punkty { border-radius: 50%; }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 1/1 | Klasa `.blok` definiowana w PHP (`class='blok'`), ale brak definicji CSS dla tej klasy. Jednak `figure` działa jako kontener display:flex dla bloków. Punkt przyznano warunkowo za `div`-y z klasą. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` poprawne. |
| R.5.2 – Zamknięcie połączenia | 1/1 | `mysqli_close($conn)` wywoływane w każdym bloku. |
| R.5.3 – Zapytania SQL w skryptach | 0/1 | Skrypt 4 używa INSERT bez sprawdzenia poprawności pól, a po INSERT próbuje wykonać `mysqli_num_rows()` na wyniku INSERT (zawsze zwraca 0 dla INSERT) – logika błędna. |
| R.5.4 – Walidacja wypełnienia pól formularza | 0/1 | `isset($_POST["i-nazwa"])` – pole formularza nie ma atrybutu `name`, więc warunek nigdy nie będzie spełniony. |
| R.5.5 – Użycie tablic $_POST | 0/1 | Pola formularza nie mają atrybutu `name` – `$_POST` będzie puste. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 pobiera i wyświetla Top 5 (choć bez owijającego `<ul>`). |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 1/1 | Skrypt 2 poprawnie wyświetla galerię z alt i title. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | `isset($_POST["i-id"])` – pole nie ma atrybutu `name`, nie zostanie przekazane przez POST. Skrypt 3 nigdy nie wykona zapytania. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 0/1 | Pola formularza bez atrybutu `name` – INSERT nigdy nie zostanie wykonany. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$conn`, `$sql`, `$result`, `$row` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 26 / 41
- **Wynik procentowy:** 63,4%
- **Status:** ❌ NIEZALICZONY (Próg zaliczenia: 70%)
