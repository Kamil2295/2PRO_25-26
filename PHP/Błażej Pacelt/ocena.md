# Raport z egzaminu zawodowego INF.03
**Uczeń:** Błażej Pacelt

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwerendy.txt` zawiera cztery zapytania. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 0/1 | Zapytanie poprawne składniowo, ale brak zrzutu ekranu `kw1` (brak pliku kw1.*). |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw2.jpg` obecny. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw3.JPEG` obecny. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 0/1 | Zapytanie poprawne, ale brak zrzutu ekranu kw4 (brak pliku kw4.*). |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji (zrzutu ekranu) potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 1/1 | `lang="pl"`, `charset="UTF-8"`, tytuł „Gry komputerowe" – wszystko poprawne. |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `main`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | Lista `ul/li` generowana przez Skrypt 1. |
| R.2.7 – Formularze z etykietami (label) | 1/1 | Etykiety `label` z atrybutem `for` poprawnie powiązane z polami wejściowymi (błędne `require` zamiast `required` nie dyskwalifikuje tego kryterium). |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt=` poprawnie ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 0/1 | Brak atrybutu `title` na obrazach w galerii. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 1/1 | `main { display: flex; flex-direction: row; }` – sekcje obok siebie. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 1/1 | `href="http://sklep.gry.pl"` poprawny. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: Garamond; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 1/1 | Poprawnie zdefiniowane. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `#points { background-color: Tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | Poprawnie ustawione. |
| R.4.5 – Media queries dla 800 px | 0/1 | Brak reguły `@media` w pliku styl.css – brak responsywności. |
| R.4.6 – Wyrównanie tekstu (text-align) | 1/1 | `#mid p { text-align: center; }` obecne. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding w różnych elementach. |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: scroll` na `#mid`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `#points { border-radius: 50%; }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 0/1 | Brak dedykowanej klasy CSS dla bloków gier w galerii. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` wywołane na początku pliku, jednokrotnie dla całego dokumentu. |
| R.5.2 – Zamknięcie połączenia | 1/1 | `mysqli_close($conn)` na końcu dokumentu. |
| R.5.3 – Zapytania SQL w skryptach | 1/1 | Skrypty używają poprawnych zapytań SQL dla wszystkich funkcji. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `isset($_POST["nazwa"])` i `isset($_POST["id"])` obecne. |
| R.5.5 – Użycie tablic $_POST | 1/1 | `$_POST["nazwa"]`, `$_POST["id"]` poprawnie używane. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 1/1 | Skrypt 1 poprawnie generuje listę Top 5. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 1/1 | Skrypt 2 poprawnie wyświetla galerię z alt. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 1/1 | Skrypt 3 wyszukuje po `$_POST["id"]` i wyświetla dane z LEFT(opis,100). |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 1/1 | Skrypt 4 wykonuje poprawny INSERT do bazy. |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$conn`, `$sql`, `$result`, `$row`, `$nazwa`, `$opis`, `$id` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 33 / 41
- **Wynik procentowy:** 80,5%
- **Status:** ✅ ZALICZONY (Próg zaliczenia: 70%)
