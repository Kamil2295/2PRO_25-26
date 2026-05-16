# Raport z egzaminu zawodowego INF.03
**Uczeń:** Marcin Starzyński

---

## Punktacja szczegółowa

| Kryterium | Punkty | Uwagi / Wyjaśnienie błędów |
| :--- | :--- | :--- |
| **R.1 – Operacje na bazie danych** | | |
| R.1.1 – Import bazy udokumentowany plikiem import.png | 1/1 | Plik `import.png` obecny w folderze `bazydanych/`. |
| R.1.2 – Plik kwerendy.txt zawiera przynajmniej jedno poprawne zapytanie | 1/1 | Plik `kwerendy.txt` zawiera cztery zapytania, kw1, kw3, kw4 są poprawne. |
| R.1.3 – Kwerenda 1: SELECT id, nazwa, zdjecie FROM gry (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw1.png` obecny. |
| R.1.4 – Kwerenda 2: SELECT nazwa, LEFT(opis,100), punkty, cena WHERE id=1 (z dokumentacją) | 0/1 | Kwerenda 2 używa pełnego `opis` bez `LEFT(opis, 100)`: `SELECT nazwa, opis, punkty, cena FROM gry where id = 1` – niekompletna zgodnie z wymaganiami. |
| R.1.5 – Kwerenda 3: SELECT nazwa, punkty ORDER BY punkty DESC LIMIT 5 (z dokumentacją) | 1/1 | Zapytanie poprawne, zrzut `kw3.png` obecny. |
| R.1.6 – Kwerenda 4: INSERT rekordu Zamczysko (z dokumentacją) | 1/1 | Zapytanie INSERT poprawne, zrzut `kw4.png` obecny. Zauważalne błędy kodowania polskich znaków w pliku txt, ale zapytanie zawiera właściwe dane. |
| **R.2 – Zawartość witryny internetowej** | | |
| R.2.1 – Przeskalowanie zamczysko.jpg do szerokości 550 px | 0/1 | Brak dokumentacji potwierdzającej przeskalowanie. |
| R.2.2 – Deklaracja DOCTYPE HTML5 | 1/1 | `<!DOCTYPE html>` obecne. |
| R.2.3 – lang="pl", charset=UTF-8, tytuł „Gry komputerowe" | 0/1 | Tytuł strony to „Gry Komputerowe" (wielka litera K) – niezgodność z wymaganiem „Gry komputerowe". |
| R.2.4 – Semantyczne tagi: header, section, footer | 1/1 | Tagi `header`, `section`, `footer` obecne. |
| R.2.5 – Nagłówki (h1/h2/h3) w sekcjach | 1/1 | Nagłówki h1 i h3 obecne. |
| R.2.6 – Lista punktowana (ul/li) | 1/1 | `<ul>` z `<li>` generowanymi przez Skrypt 1 obecna. |
| R.2.7 – Formularze z etykietami (label) | 0/1 | Formularz dodawania nowej gry nie posiada żadnych etykiet `<label>` – tylko pola `<input>`. |
| R.2.8 – Formularz wyszukiwania w stopce | 1/1 | Formularz w `footer` obecny. |
| R.2.9 – Atrybuty alt obrazów | 1/1 | `alt=` ustawiony w Skrypcie 2. |
| R.2.10 – Atrybut title obrazów | 1/1 | `title=` (id) ustawiony w Skrypcie 2. |
| **R.3 – Działanie witryny** | | |
| R.3.1 – Poprawny układ bloków (flexbox/grid/float) | 0/1 | CSS definiuje `float` dla selektorów `#lewy`, `#srodek`, `#prawy`, ale w HTML ID sekcji to `#lewa`, `#srodek`, `#prawo` – niezgodność selektorów. Układ nie zadziała. |
| R.3.2 – Podłączenie zewnętrznego pliku styl.css | 1/1 | `<link rel="stylesheet" href="styl.css">` obecne. |
| R.3.3 – Działający link do sklepu | 0/1 | `href="http://sklep.gry.pl "` – spacja na końcu URL, nieprawidłowy link. |
| R.3.4 – Formularz dodawania gry wysyła POST do gry.php | 0/1 | `<input type="button" value="DODAJ">` zamiast `type="submit"` – formularz nie zostanie wysłany. |
| R.3.5 – Formularz wyszukiwania wysyła POST do gry.php | 1/1 | `method="post" action="gry.php"` poprawne, `type="submit"` poprawne. |
| **R.4 – Styl CSS** | | |
| R.4.1 – Czcionka Garamond, kolor biały | 1/1 | `font-family: 'Garamond'; color: white` w selektorze `*`. |
| R.4.2 – Kolory tła: Indigo (header, boki, footer), czarny (środek) | 0/1 | Sekcje boczne (lewa/prawa) mają `background-color: indigo`, ale brakuje tła dla `#prawo` – selektor `#lewa, #prawa` nie obejmuje sekcji o id `#prawo`. Niezgodność nazw. |
| R.4.3 – Kolor Tomato dla punktów | 1/1 | `span { background-color: tomato; }` obecne. |
| R.4.4 – Wysokość bloków: 600 px (sekcje) / 150 px (footer) | 1/1 | `height: 600px` dla sekcji i `height: 150px` dla footer. |
| R.4.5 – Media queries dla 800 px | 0/1 | `@media screen { }` bez warunku `min-width` lub `max-width` – nie jest to responsywna reguła media. |
| R.4.6 – Wyrównanie tekstu (text-align) | 0/1 | Brak zdefiniowanego `text-align` dla nagłówka lub bloków gier. |
| R.4.7 – Marginesy wewnętrzne/zewnętrzne | 1/1 | Padding w różnych elementach (`body { margin: 0; }`, `padding: 2px` itp.). |
| R.4.8 – Pasek przewijania w sekcji środkowej | 1/1 | `overflow: scroll` na `#srodek`. |
| R.4.9 – Klasa dla okrągłych punktów (Tomato, border-radius 50%) | 1/1 | `span { border-radius: 50%; }` poprawne. |
| R.4.10 – Klasa stylizacji bloków gier | 1/1 | Klasa `.gra { display: inline-block; text-align: center; }` zdefiniowana. |
| **R.5 – Skrypt PHP** | | |
| R.5.1 – Poprawne nawiązanie połączenia z bazą | 1/1 | `mysqli_connect()` poprawne. |
| R.5.2 – Zamknięcie połączenia | 0/1 | `mysqli_close($conn)` wywoływane wewnątrz pętli `while` w Skryptach 1 i 2 – połączenie zamykane po pierwszej iteracji, kolejne wiersze nie mogą być pobrane. |
| R.5.3 – Zapytania SQL w skryptach | 0/1 | INSERT w Skrypcie 4 zawiera tylko 4 wartości dla 5 kolumn: `VALUES('$nazwa', '$opis', '$cena', '$zdjecie')` – brak wartości `punkty`. Błąd SQL. |
| R.5.4 – Walidacja wypełnienia pól formularza | 1/1 | `isset($_POST['nazwa'])` i `isset($_POST['id'])` obecne. |
| R.5.5 – Użycie tablic $_POST | 0/1 | Formularz dodawania gry ma `<input type="button">` zamiast `type="submit"` – dane nigdy nie zostaną wysłane, `$_POST` będzie puste. |
| R.5.6 – Wyświetlanie listy Top 5 z bazy | 0/1 | `mysqli_close($conn)` wewnątrz pętli while – pętla przerwie się po pierwszym wierszu, wyświetli tylko jedną grę. |
| R.5.7 – Wyświetlanie galerii obrazów z bazy | 0/1 | Skrypt 2 zawiera błąd składni PHP: `echo "<p>".$wiersz["nazwa."</p>"']` – PHP nie wykona tego kodu. Ponadto `mysqli_close()` w pętli. |
| R.5.8 – Wyświetlanie opisu gry po ID (Skrypt 3) | 0/1 | Skrypt 3 używa `$conn` który jest już zamknięty (brak nowego `mysqli_connect()` w stopce) – zapytanie nie wykona się. |
| R.5.9 – Obsługa dodawania rekordu (Skrypt 4) | 0/1 | INSERT ma błąd (brak wartości `punkty`), formularz nie wysyła danych (`type="button"`). |
| R.5.10 – Czytelne nazewnictwo zmiennych | 1/1 | Zmienne `$conn`, `$zapytanie3`, `$wynik3`, `$wiersz`, `$nazwa`, `$opis` są czytelne. |

---

## Podsumowanie

- **Suma punktów:** 23 / 41
- **Wynik procentowy:** 56,1%
- **Status:** ❌ NIEZALICZONY (Próg zaliczenia: 70%)
