# Raport z egzaminu zawodowego INF.03
**Uczeń:** Adam Pawłowski

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 0/1 | Brak pliku `import.png` w folderze ucznia. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 0/1 | Brak pliku `kwerendy.txt` w folderze ucznia. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 0/1 | Brak kwerendy.txt i brak zrzutu ekranu kw1. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 0/1 | Brak kwerendy.txt i brak zrzutu ekranu kw2. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 0/1 | Brak kwerendy.txt i brak zrzutu ekranu kw3. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 0/1 | Brak kwerendy.txt i brak zrzutu ekranu kw4. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak możliwości weryfikacji wymiarów pliku (brak opisu metadanych); nie dostarczono zrzutu potwierdzającego skalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 0/1 | Tytuł to „Gry Komputerowe" (wielka litera K), a nie „Gry komputerowe" – niezgodność z wymaganiem. |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | Lista `ul/li` generowana przez Skrypt 1. |
| R.2.7 – Formularze z etykietami (label) | 0/1 | Formularz w sekcji prawej posiada etykiety `label`, ale formularz w stopce nie ma żadnej etykiety dla pola wyszukiwania. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 0/1 | W Skrypcie 2 kod generuje `<img src=...alt=...>` bez cudzysłowów wokół wartości atrybutów – niepoprawna składnia HTML. |
| R.2.10 – Atrybut title obrazów | 0/1 | Brak atrybutu `title` na obrazach w galerii. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | `display: flex` na `main` z sekcjami obok siebie. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 0/1 | Href zawiera spację: `href="http://sklep.gry.pl "` – niepoprawny URL. |
| R.3.4 – Formularz dodawania gry (Skrypt 4) wysyła POST do gry.php | 0/1 | `<form action="post">` zamiast `method="post" action="gry.php"` – błędna składnia, dane nie zostaną wysłane. |
| R.3.5 – Formularz wyszukiwania (Skrypt 3) wysyła POST do gry.php | 0/1 | `<form action="post">` – takie samo błędne użycie zamiast `method="post"`. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Zdefiniowane poprawnie. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | Klasa `.pomodor` z `background-color: tomato`. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | `height: 600px` i `height: 150px` zdefiniowane. |
| R.4.5 – Media queries dla 800 px (sekcje 20%/60%/20% lub pionowo) | 0/1 | Brak reguły `@media` w pliku styl.css – brak responsywności. |
| R.4.6 – Wyrównanie tekstu w nagłówku (text-align) | 1/1 | `text-align: center` w `header`. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding zdefiniowany w kilku elementach. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: scroll` na `#center`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | Klasa `.pomodor` poprawnie zdefiniowana. |
| R.4.10 – Klasa stylizacji bloków gier | 0/1 | Brak odrębnej klasy CSS dla bloków gier w galerii; inline style w PHP. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect("localhost","root","","gry")` poprawne. |
| R.5.2 – Zamknięcie połączenia | 1/1 | `mysqli_close()` wywoływane. |
| R.5.3 – Zapytania SQL w skryptach | 0/1 | Skrypt 3 nie realizuje wyszukiwania po ID – zawiera błędne zapytanie (Top 5 zamiast wyszukiwania po id). Skrypt 4 ma `$sql = 'Insert'` – fikcyjne zapytanie. |
| R.5.4 – Walidacja wypełnienia pól formularza | 0/1 | Brak walidacji `isset()` lub `empty()` przed odczytem `$_POST`. |
| R.5.5 – Użycie tablic $_POST | 0/1 | Formularze mają błędny atrybut `action="post"` zamiast `method="post"`, co powoduje że `$_POST` nigdy nie będzie wypełnione. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 poprawnie pobiera i wyświetla Top 5. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 0/1 | Skrypt 2: brak cudzysłowów w atrybutach img – błędna składnia HTML, strona nie wyświetli poprawnie obrazów. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | Skrypt 3 zamiast wyszukiwać po ID, ponownie wyświetla Top 5 – kryterium niespełnione. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 0/1 | Skrypt 4 zawiera `$sql = 'Insert'` – fikcyjne/puste zapytanie, nie dodaje rekordu. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne takie jak `$coon`, `$sql`, `$wynik`, `$row`, `$ilosc` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 17 / 31
- **Wynik procentowy:** 54,8%
- **Status:** ❌ NIEZALICZONY (Próg zaliczenia: 70%)
