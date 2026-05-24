# OCENA - Błażej Pacelt 2PRO
## Egzamin INF.03-09-26.01-SG - Stylizacja paznokci

| Numer kryterium | Kryterium (skrócony opis) | Wynik (0/1 pkt) | Uzasadnienie |
|---|---|---|---|
| R.1.1 | Import tabel z paznokcie.sql (import.png) | 1 | Plik import.png znajduje się w katalogu |
| R.1.2 | Plik kwerendy.txt zawiera min. jedno poprawne zapytanie | 1 | Plik kwerendy.txt zawiera 3 kwerendy |
| R.1.3 | Zapytanie 1: SELECT imie, kolor, cena FROM klienci WHERE topKlient = 1 | 1 | Kwerenda poprawna |
| R.1.4 | Zapytanie 2: LIKE "2024-05-23%" (nie "=") | 1 | Poprawnie użyty LIKE: `WHERE termin LIKE "%2024-05-23%"` |
| R.1.5 | Zapytanie 3: JOIN ksztalty WHERE ksztalt = "migdał" | 0 | Brak warunku WHERE ksztalt = "migdał" – kwerenda zwróci wszystkie rekordy z JOINem |
| R.1.6 | Zapytanie 4: ALTER TABLE wzory ADD doplata INT | 0 | Kwerenda 4 jest pusta (brak zapytania ALTER TABLE) |
| R.2.1 | Grafika kolory.png – wymiar 70px | 0 | Brak atrybutu height="70px" dla kolory.png |
| R.2.2 | HTML5 z lang="pl" | 0 | `lang="en"` zamiast `lang="pl"` |
| R.2.3 | Kodowanie i tytuł "Stylizacja paznokci" | 1 | `<meta charset="UTF-8">` i tytuł prawidłowy |
| R.2.4 | Podział semantyczny (aside, main, header, nav, section, footer) | 1 | Prawidłowa struktura z wszystkimi elementami |
| R.2.5 | Nagłówki H1, H2 i numer zdającego w stopce | 1 | H1, H2 obecne, numer zdającego w footer (brak `<em>`) |
| R.2.7 | Trzy przyciski w nav: "Kolor", "Kształt", "Wzór" | 1 | Trzy przyciski z prawidłowymi tekstami |
| R.2.9 | Lista rozwijana z 5 opcjami kształtów | 1 | `<select>` z 5 opcjami |
| R.2.10 | Numer zdającego w tagu `<em>` | 0 | Numer zdającego w `<b>` zamiast `<em>` |
| R.3.3 | Zdarzenie onmouseover | 1 | Obecne `onmouseover="skrypt2(...)"` |
| R.3.4 | Input type="color" z #FF0000 | 1 | `<input type="color" name="kolor" id="kolor" value="#FF0000">` |
| R.3.5 | Input type="number" min=1 max=10 | 1 | `<input type="number" name="numer" id="numer" min="1" max="10">` |
| R.4.1 | Czcionka Trebuchet MS, sans-serif | 1 | Prawidłowo zdefiniowana dla `*` |
| R.4.2 | Kolory: BlanchedAlmond (body), Salmon i Crimson | 1 | Prawidłowo zdefiniowane kolory |
| R.4.4 | Wymiary: aside 20%, main 80%, przyciski 26% | 1 | Prawidłowe wymiary |
| R.4.9 | Sekcja 1 display:block, pozostałe display:none | 1 | Prawidłowo ustawione display |
| R.4.10 | Klasa .wzory: width 70px, margin 5px, border-radius 100% | 1 | Prawidłowo zdefiniowana klasa |
| R.5.2 | Pętla wyświetlająca 10 obrazów 1.jpg-10.jpg | 1 | Pętla `for(i = 1; i<=10; i++)` poprawna |
| R.5.3 | Obrazy mają klasę "wzory" i atrybut title | 0 | Brak atrybutu title dla obrazów |
| R.5.4 | Skrypt DOM do zmiany stylu (backgroundColor/display) | 1 | setAttribute ze zmianą stylów |
| R.5.5-5.7 | Logika przełączania zakładek (Salmon + block) | 1 | Prawidłowa logika przełączania |
| R.5.8 | Nazwy zmiennych znaczące (polski/angielski) | 1 | Nazwy zmiennych jasne |

**Suma punktów: 21/28 pkt = 75,0% (NA PROGU 75%)**

### Główne niedostatki:
- Zły język HTML (lang="en" zamiast lang="pl")
- Brak warunku WHERE w zapytaniu 3
- Brak zapytania ALTER TABLE (R.1.6)
- Brak atrybutu title dla obrazów
- Numer zdającego w `<b>` zamiast `<em>`
- Brak atrybutu height dla kolory.png

### Zalety:
- Prawidłowa struktura HTML5 z wszystkimi elementami
- Dobra implementacja CSS
