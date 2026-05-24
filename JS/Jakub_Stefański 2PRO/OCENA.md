# OCENA - Jakub Stefański 2PRO
## Egzamin INF.03-09-26.01-SG - Stylizacja paznokci

| Numer kryterium | Kryterium (skrócony opis) | Wynik (0/1 pkt) | Uzasadnienie |
|---|---|---|---|
| R.1.1 | Import tabel z paznokcie.sql (import.png) | 0 | Plik nazwany `inport.png` (literówka) – brak prawidłowego `import.png` |
| R.1.2 | Plik kwerendy.txt zawiera min. jedno poprawne zapytanie | 1 | Plik kwarendy1.txt zawiera 4 kwerendy |
| R.1.3 | Zapytanie 1: SELECT imie, kolor, cena FROM klienci WHERE topKlient = 1 | 1 | Kwerenda poprawna |
| R.1.4 | Zapytanie 2: LIKE "2024-05-23%" (nie "=") | 0 | BŁĄD: `WHERE "2024-05-23"` – brak LIKE i kolumny termin |
| R.1.5 | Zapytanie 3: JOIN ksztalty WHERE ksztalt = "migdał" | 1 | Kwerenda zawiera JOIN z warunkiem |
| R.1.6 | Zapytanie 4: ALTER TABLE wzory ADD doplata INT | 1 | `ALTER TABLE `wzory` ADD `dopłata` INT(20) NOT NULL` |
| R.2.1 | Grafika kolory.png – wymiar 70px | 0 | Brak kolory.png, brak input z kolorem |
| R.2.2 | HTML5 z lang="pl" | 1 | `<!DOCTYPE html>` i `lang="pl"` obecne |
| R.2.3 | Kodowanie i tytuł "Stylizacja paznokci" | 1 | `<meta charset="UTF-8">` i tytuł prawidłowy |
| R.2.4 | Podział semantyczny (aside, main, header, nav, section, footer) | 0 | Brak `<aside>` – zastąpiona div id="blok"; brak `<footer>` w main |
| R.2.5 | Nagłówki H1, H2 i numer zdającego w stopce | 1 | H1, H2 obecne, numer w footer |
| R.2.7 | Trzy przyciski w nav: "Kolor", "Kształt", "Wzór" | 1 | Trzy przyciski (typo: "Kształ" zamiast "Kształt") |
| R.2.9 | Lista rozwijana z 5 opcjami kształtów | 0 | Lista niezwiniona (UL/LI zamiast SELECT/OPTION) |
| R.2.10 | Numer zdającego w tagu `<em>` | 0 | Numer w `<i>` zamiast `<em>`, wartość "17" zamiast numeru zdającego |
| R.3.3 | Zdarzenie onmouseover | 1 | Obecne `onmouseover` w kolor.js (ustawione na element) |
| R.3.4 | Input type="color" z #FF0000 | 0 | `<input type="color" value="FF0000">` (brak # w value) |
| R.3.5 | Input type="number" min=1 max=10 | 0 | Brak input type="number" |
| R.4.1 | Czcionka Trebuchet MS, sans-serif | 1 | Prawidłowo zdefiniowana dla body |
| R.4.2 | Kolory: BlanchedAlmond (body), Salmon i Crimson | 1 | Prawidłowo zdefiniowane kolory |
| R.4.4 | Wymiary: aside 20%, main 80%, przyciski 26% | 1 | Prawidłowe wymiary |
| R.4.9 | Sekcja 1 display:block, pozostałe display:none | 0 | Brak display:none dla sekcji – brak CSS dla sekcji |
| R.4.10 | Klasa .wzory: width 70px, margin 5px, border-radius 100% | 0 | Klasa .Wzory (z wielką literą) zamiast .wzory |
| R.5.2 | Pętla wyświetlająca 10 obrazów 1.jpg-10.jpg | 0 | Pętla: `for(let i = 1; i <10; i++)` – tylko 9 obrazów (i<10 zamiast i<=10) |
| R.5.3 | Obrazy mają klasę "wzory" i atrybut title | 0 | Klasa "Wzory" (wielka litera), title=1 (liczba, nie zmienna i) – zawsze 1 |
| R.5.4 | Skrypt DOM do zmiany stylu (backgroundColor/display) | 1 | Zmiana stylów w kolor.js |
| R.5.5-5.7 | Logika przełączania zakładek (Salmon + block) | 0 | Błędy w skrypcie: `appendchild` zamiast `appendChild` – skrypt się nie uruchomi |
| R.5.8 | Nazwy zmiennych znaczące (polski/angielski) | 1 | Nazwy zmiennych jasne (przy1, jeden, dwa, trzy) |

**Suma punktów: 12/28 pkt = 42,9% (ZNACZNIE PONIŻEJ PROGU 75%)**

### Główne niedostatki:
- Brak paznokcie.sql (nie ma w katalogu)
- Zły plik import.png (inport.png – literówka)
- Błędy w kwerendzie 2 (brak LIKE i kolumny)
- Błędy w HTML (div zamiast aside, lista zamiast select)
- Błędy w CSS (.Wzory zamiast .wzory)
- Błędy w JavaScript (pętla tylko do 9, appendchild zamiast appendChild)
- Brak poprawnie skonfigurowanego color input
- Brak input type="number"

### Pozytywne strony:
- Struktura ogólna HTML jest zrozumiała
- Some CSS elements are correct
