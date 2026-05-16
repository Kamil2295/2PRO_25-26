# Raport z egzaminu zawodowego INF.03
**Uczeń:** Jakub Stefański

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 0/1 | Brak pliku `import.png` w folderze ucznia. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwarendy.txt` (błędna nazwa pliku, ale zawartość ocenialna) zawiera zapytania, kw1 i kw3 są poprawne. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 0/1 | Zapytanie poprawne składniowo, ale brak zrzutu ekranu kw1. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 0/1 | Kwerenda 2 pomija pole `punkty`: `SELECT nazwa, left(opis, 100 ), cena FROM gry WHERE id = 1` – niekompletna. Brak zrzutu. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 0/1 | Zapytanie poprawne, ale brak zrzutu ekranu kw3. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 0/1 | Zapytanie poprawne składniowo, ale brak zrzutu ekranu kw4. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 1/1 | `lang="pl"`, `charset="UTF-8"`, tytuł „Gry komputerowe" – poprawne. |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `main`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 0/1 | Elementy `<li>` generowane przez Skrypt 1 bez owijającego `<ul>` – brak poprawnej listy nieuporządkowanej w HTML. |
| R.2.7 – Formularze z etykietami (label) | 1/1 | Elementy `<label>` powiązane z inputami w formularzu. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 0/1 | Skrypt 2 generuje błędne HTML: `<img src='...'alt=nazwa'` – brak zamknięcia cudzysłowu, atrybut `alt` jest malformowany. |
| R.2.10 – Atrybut title obrazów | 0/1 | Brak atrybutu `title` na obrazach. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 0/1 | Brak pliku `styl.css` – brak zdefiniowanego układu bloków. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 0/1 | `<link rel="stylesheet" href="styl.css">` w HTML, ale plik `styl.css` nie istnieje w folderze. |
| R.3.3 – Działający link do sklepu | 1/1 | `href="http://sklep.gry.pl"` poprawny. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 0/1 | Brak pliku styl.css. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 0/1 | Brak pliku styl.css. |
| R.4.3 – Kolor Tomato dla punktów | 0/1 | Brak pliku styl.css. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 0/1 | Brak pliku styl.css. |
| R.4.5 – Media queries dla 800 px | 0/1 | Brak pliku styl.css. |
| R.4.6 – Wyrównanie tekstu (text-align) | 0/1 | Brak pliku styl.css. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 0/1 | Brak pliku styl.css. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 0/1 | Brak pliku styl.css. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 0/1 | Brak pliku styl.css; `<span>` bez stylu zaokrąglenia. |
| R.4.10 – Klasa stylizacji bloków gier | 0/1 | Brak pliku styl.css; klasa `gra` w PHP, ale bez definicji CSS. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect("localhost","root","","gry")` poprawne we wszystkich skryptach. |
| R.5.2 – Zamknięcie połączenia | 0/1 | Brak `mysqli_close()` po skrypcie 3 i 4 (pominięte). |
| R.5.3 – Zapytania SQL w skryptach | 0/1 | INSERT w Skrypcie 4 ma błąd składni: `VALUES ('$nazwa',...,'$zdjecie';)` – średnik przed nawiasem zamykającym powoduje błąd SQL. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `isset($_POST['dodaj'])` i `isset($_POST['id'])` obecne. |
| R.5.5 – Użycie tablic $_POST | 1/1 | `$_POST['nazwa']`, `$_POST['id']` poprawnie używane. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 pobiera i wyświetla Top 5 (choć bez owijającego `<ul>`). |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 0/1 | Skrypt 2 generuje błędną składnię HTML dla `<img>` – atrybut alt malformowany. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | Skrypt 3 używa `$row` zamiast `$row3` w pętli while – zmienna niezdefiniowana, brak danych. Ponadto SELECT nie używa `LEFT(opis,100)`. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 0/1 | INSERT ma błąd składni SQL (średnik przed `)`), nie zostanie wykonany. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$conn`, `$zapytanie`, `$result`, `$row`, `$nazwa`, `$opis` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 15 / 41
- **Wynik procentowy:** 36,6%
- **Status:** ❌ NIEZALICZONY (Próg zaliczenia: 70%)
