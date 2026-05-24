# OCENA - Krzysztof Wesołowski 2PRO
## Egzamin INF.03-09-26.01-SG - Stylizacja paznokci

| Numer kryterium | Kryterium (skrócony opis) | Wynik (0/1 pkt) | Uzasadnienie |
|---|---|---|---|
| R.1.1 | Import tabel z paznokcie.sql (import.png) | 0 | Brak pliku import.png w katalogu głównym (paznokcie.sql jest w podkatalogu pliki15/) |
| R.1.2 | Plik kwerendy.txt zawiera min. jedno poprawne zapytanie | 1 | Plik kwerendy.txt zawiera 4 kwerendy |
| R.1.3 | Zapytanie 1: SELECT imie, kolor, cena FROM klienci WHERE topKlient = 1 | 1 | Kwerenda poprawna |
| R.1.4 | Zapytanie 2: LIKE "2024-05-23%" (nie "=") | 1 | Poprawnie użyty LIKE: `WHERE termin LIKE "2024-05-23%"` |
| R.1.5 | Zapytanie 3: JOIN ksztalty WHERE ksztalt = "migdał" | 1 | Kwerenda poprawna z JOINem |
| R.1.6 | Zapytanie 4: ALTER TABLE wzory ADD doplata INT | 1 | Poprawna składnia: `ADD COLUMN `doplata` INTEGER` |
| R.2.1 | Grafika kolory.png – wymiar 70px | 0 | Brak atrybutu height="70px" dla kolory.png |
| R.2.2 | HTML5 z lang="pl" | 1 | `<!DOCTYPE html>` i `lang="pl"` obecne |
| R.2.3 | Kodowanie i tytuł "Stylizacja paznokci" | 1 | `<meta charset="UTF-8">` i tytuł prawidłowy |
| R.2.4 | Podział semantyczny (aside, main, header, nav, section, footer) | 1 | Prawidłowa struktura z wszystkimi elementami |
| R.2.5 | Nagłówki H1, H2 i numer zdającego w stopce | 1 | H1, H2 obecne, numer w footer |
| R.2.7 | Trzy przyciski w nav: "Kolor", "Kształt", "Wzór" | 1 | Trzy przyciski z prawidłowymi tekstami |
| R.2.9 | Lista rozwijana z 5 opcjami kształtów | 1 | `<select>` z 5 opcjami (jednak jest literówka: "zaogrąglony" zamiast "zaokrąglony") |
| R.2.10 | Numer zdającego w tagu `<em>` | 0 | Numer zdającego w `<i>` zamiast `<em>`: `<i>21KW</i>` |
| R.3.3 | Zdarzenie onmouseover | 1 | Obecne `onmouseover="najedz_na(...)"` |
| R.3.4 | Input type="color" z #FF0000 | 1 | `<input type="color" name="kolor" id="kolor" value="#FF0000">` |
| R.3.5 | Input type="number" min=1 max=10 | 1 | `<input type="number" min="1" max="10">` |
| R.4.1 | Czcionka Trebuchet MS, sans-serif | 1 | Prawidłowo zdefiniowana dla `*` |
| R.4.2 | Kolory: BlanchedAlmond (body), Salmon i Crimson | 1 | Prawidłowo zdefiniowane kolory |
| R.4.4 | Wymiary: aside 20%, main 80%, przyciski 26% | 1 | Prawidłowe wymiary |
| R.4.9 | Sekcja 1 display:block, pozostałe display:none | 0 | CSS ma błąd: `#s1 { display: block; } #s1, #s3 { visibility: collapse; }` – konflikt stylów |
| R.4.10 | Klasa .wzory: width 70px, margin 5px, border-radius 100% | 1 | Prawidłowo zdefiniowana klasa |
| R.5.2 | Pętla wyświetlająca 10 obrazów 1.jpg-10.jpg | 1 | Pętla `for (let i = 1; i <= 10; i++)` poprawna |
| R.5.3 | Obrazy mają klasę "wzory" i atrybut title | 1 | `className = "wzory"` i `title = i` |
| R.5.4 | Skrypt DOM do zmiany stylu (backgroundColor/display) | 1 | Zmiana stylów w funkcji najedz_na |
| R.5.5-5.7 | Logika przełączania zakładek (Salmon + block) | 1 | Prawidłowa logika przełączania |
| R.5.8 | Nazwy zmiennych znaczące (polski/angielski) | 1 | Nazwy zmiennych jasne (s1, s2, s3, p1, p2, p3) |

**Suma punktów: 23/28 pkt = 82,1% (POWYŻEJ PROGU 75%)**

### Główne niedostatki:
- Brak import.png w głównym katalogu
- Brak atrybutu height dla kolory.png
- Numer zdającego w `<i>` zamiast `<em>`
- Konflikt stylów CSS (#s1 { display: block } kolizja z #s1, #s3 { visibility: collapse })
- Literówka w select: "zaogrąglony" zamiast "zaokrąglony"

### Zalety:
- Prawidłowa struktura HTML5
- Dobra implementacja JavaScript
- Prawidłowe kwerendy SQL
