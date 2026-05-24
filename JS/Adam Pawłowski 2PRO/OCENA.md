# OCENA - Adam Pawłowski 2PRO
## Egzamin INF.03-09-26.01-SG - Stylizacja paznokci

| Numer kryterium | Kryterium (skrócony opis) | Wynik (0/1 pkt) | Uzasadnienie |
|---|---|---|---|
| R.1.1 | Import tabel z paznokcie.sql (import.png) | 1 | Plik import.png znajduje się w katalogu |
| R.1.2 | Plik kwerendy.txt zawiera min. jedno poprawne zapytanie | 1 | Plik kwarendy.txt.txt zawiera 4 kwerendy |
| R.1.3 | Zapytanie 1: SELECT imie, kolor, cena FROM klienci WHERE topKlient = 1 | 1 | Kwerenda poprawna, składnia prawidłowa |
| R.1.4 | Zapytanie 2: LIKE "2024-05-23%" (nie "=") | 1 | Poprawnie użyty LIKE: `WHERE termin LIKE "2024-05-23 %"` |
| R.1.5 | Zapytanie 3: JOIN ksztalty WHERE ksztalt = "migdał" | 1 | Kwerenda poprawna z JOINem |
| R.1.6 | Zapytanie 4: ALTER TABLE wzory ADD doplata INT | 1 | Poprawna składnia: `ADD doplata INT NOT NULL` |
| R.2.1 | Grafika kolory.png – wymiar 70px | 0 | Brak atrybutu height="70px" dla kolory.png |
| R.2.2 | HTML5 z lang="pl" | 1 | `<!DOCTYPE html>` i `lang="pl"` obecne |
| R.2.3 | Kodowanie i tytuł "Stylizacja paznokci" | 1 | `<meta charset="UTF-8">` i tytuł prawidłowy |
| R.2.4 | Podział semantyczny (aside, main, header, nav, section, footer) | 0 | Brak tagu `<footer>` i nieprawidłowa struktura (div `id="Ale"` zamiast semantycznych elementów) |
| R.2.5 | Nagłówki H1, H2 i numer zdającego w stopce | 0 | Brak tagu `<footer>` i numeru zdającego |
| R.2.7 | Trzy przyciski w nav: "Kolor", "Kształt", "Wzór" | 1 | Trzy przyciski z prawidłowymi tekstami |
| R.2.9 | Lista rozwijana z 5 opcjami kształtów | 0 | Brak `<select>` z 5 opcjami (brak tego elementu w HTML) |
| R.2.10 | Numer zdającego w tagu `<em>` | 0 | Brak tagu `<em>` i numeru zdającego |
| R.3.3 | Zdarzenie onmouseover | 1 | Obecne `onmouseover="over(...)"` |
| R.3.4 | Input type="color" z #FF0000 | 1 | `<input type="color" value="#FF0000">` |
| R.3.5 | Input type="number" min=1 max=10 | 0 | Brak input type="number" w sekcji 3 |
| R.4.1 | Czcionka Trebuchet MS, sans-serif | 1 | `font-family: Trebuchet MS,sans-serif;` dla `*` |
| R.4.2 | Kolory: BlanchedAlmond (body), Salmon i Crimson | 1 | Prawidłowo zdefiniowane kolory tła |
| R.4.4 | Wymiary: aside 20%, main 80%, przyciski 26% | 1 | Prawidłowe wymiary w CSS |
| R.4.9 | Sekcja 1 display:block, pozostałe display:none | 1 | `#s1 { visibility: visible }`, `#s2,#s3 { visibility: hidden }` |
| R.4.10 | Klasa .wzory: width 70px, margin 5px, border-radius 100% | 1 | Prawidłowo zdefiniowana klasa |
| R.5.2 | Pętla wyświetlająca 10 obrazów 1.jpg-10.jpg | 1 | Pętla `for(let i=1;i<=10;i++)` poprawna |
| R.5.3 | Obrazy mają klasę "wzory" i atrybut title | 1 | `setAttribute("class","wzory")` i `setAttribute("title",i)` |
| R.5.4 | Skrypt DOM do zmiany stylu (backgroundColor/display) | 1 | Switch statement ze zmianą stylów |
| R.5.5-5.7 | Logika przełączania zakładek (Salmon + block) | 1 | Prawidłowa logika zmiany widoczności i kolorów |
| R.5.8 | Nazwy zmiennych znaczące (polski/angielski) | 1 | Nazwy zmiennych jasne (s1, s2, s3, pr1, pr2, pr3) |

**Suma punktów: 20/28 pkt = 71,4% (PONIŻEJ PROGU 75%)**

### Główne niedostatki:
- Brak prawidłowej struktury HTML5 (brak `<footer>`)
- Brak numeru zdającego w stopce
- Brak input type="number"
- Brak select/option z kształtami
- Brak atrybutu height dla kolory.png
