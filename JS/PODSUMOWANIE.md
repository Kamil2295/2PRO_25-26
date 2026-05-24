# PODSUMOWANIE WYNIKÓW EGZAMINU INF.03-09-26.01-SG
## Ocena prac uczniów - Stylizacja paznokci

### Kryteria zaliczenia: 75% punktów (21 pkt z 28)

| Lp. | Uczeń | Punkty | % | Wynik | Uwagi |
|---|---|---|---|---|---|
| 1 | Adam Pawłowski 2PRO | 20/28 | 71,4% | ❌ NIE ZALICZ | Brak struktury HTML5, brak footera, brak select |
| 2 | Bartłomiej Wepa 2PRO | 26/28 | 92,9% | ✓ ZALICZ | Prawie idealna praca, drobny błąd w event listener |
| 3 | Błażej Pacelt 2PRO | 21/28 | 75,0% | ✓ ZALICZ | Na progu zaliczenia, błędy w kwerendzie 3 i 4 |
| 4 | Jakub Stefański 2PRO | 12/28 | 42,9% | ❌ NIE ZALICZ | Brak paznokcie.sql, błędy w korendzie 2, wiele błędów JS |
| 5 | Krzysztof Wesołowski 2PRO | 23/28 | 82,1% | ✓ ZALICZ | Dobra praca, brak import.png w głównym katalogu |
| 6 | Marcin Starzyński 2PRO | 17/28 | 60,7% | ❌ NIE ZALICZ | Brak import.png, paznokcie.sql, błędy w app.js |
| 7 | Volodymyr Pestrak 2PRO | 26/28 | 92,9% | ✓ ZALICZ | Prawie idealna praca, onclick zamiast onmouseover |

---

## Zestawienie statystyczne

**Liczba zaliczających: 4 uczniów (57,1%)**
**Liczba niezaliczających: 3 uczniów (42,9%)**

**Średnia punktów:** 20,7/28 (74,0%)
**Mediana punktów:** 21/28 (75,0%)

---

## Najczęstsze błędy

### Błędy w operacjach na bazie danych (REZULTAT 1):
1. **Błędy w R.1.1** (3 uczniów): 
   - Brak pliku import.png (Jakub, Marcin)
   - Zły plik `inport.png` zamiast `import.png` (Jakub)

2. **Błędy w R.1.4** (2 uczniów):
   - Brak LIKE w kwerendzie 2 (Jakub: brakuje kolumny termin i LIKE)

3. **Błędy w R.1.5** (1 uczeń):
   - Brak warunku WHERE w zapytaniu 3 (Błażej)

4. **Błędy w R.1.6** (1 uczeń):
   - Brak zapytania ALTER TABLE (Błażej)

### Błędy w zawartości witryny (REZULTAT 2):
1. **Błędy w R.2.2** (1 uczeń):
   - lang="en" zamiast lang="pl" (Błażej)

2. **Błędy w R.2.4** (1 uczeń):
   - Brak prawidłowej struktury HTML5 (Adam)

3. **Błędy w R.2.9** (2 uczniów):
   - Brak select/option (Adam, Marcin)

4. **Błędy w R.2.10** (3 uczniów):
   - Numer w `<i>` zamiast `<em>` (Błażej, Krzysztof, Marcin)

### Błędy w działaniu i stylu (REZULTAT 3-4):
1. **Błędy w R.2.1 i atrybucie height** (7 uczniów):
   - Brak atrybutu height="70px" dla kolory.png (wszyscy)

2. **Błędy w R.3.3** (2 uczniów):
   - addEventListener zamiast onmouseover (Bartłomiej)
   - onclick zamiast onmouseover (Volodymyr)

3. **Błędy w R.3.4** (1 uczeń):
   - Brak # w value="#FF0000" (Jakub)

### Błędy w skryptach (REZULTAT 5):
1. **Błędy w R.5.2** (1 uczeń):
   - Pętla tylko do 9 zamiast 10 (Jakub: i<10 zamiast i<=10)

2. **Błędy w R.5.3** (2 uczniów):
   - Klasa .Wzory zamiast .wzory (Jakub, Marcin)
   - Brak atrybutu title (Błażej)

3. **Błędy w R.5.4-5.7** (2 uczniów):
   - Błędy w logice przełączania (Jakub: appendchild zamiast appendChild)
   - Brak event listenera dla btn2 i btn3 (Marcin: btn2 = function zamiast btn2.onmouseover = function)

---

## Rekomendacje dla uczniów niezaliczających

### Adam Pawłowski (71,4%):
- Dodać footer poza main
- Dodać select/option z 5 opcjami kształtów
- Dodać input type="number"
- Dodać kolory.png z height="70px"

### Jakub Stefański (42,9%):
- Dodać paznokcie.sql
- Naprawić nazwę pliku import.png
- Naprawić kwerendę 2 (dodać LIKE i kolumnę termin)
- Naprawić skrypt (appendChild, pętla do 10, klasa .wzory)
- Zmienić struktura HTML na semantyczną (aside zamiast div)

### Marcin Starzyński (60,7%):
- Dodać import.png i paznokcie.sql
- Naprawić app.js (btn2.onmouseover zamiast btn2 = function)
- Dodać div id="obrazy" do HTML
- Dodać select/option z kształtami
- Zmienić .Wzory na .wzory

---

## Ocena ogólna

Praca uczniów wykazuje **mieszane rezultaty**. Czworo uczniów zaaliczyło egzamin z dobrymi wynikami (75-93%), natomiast trzech uczniów wykazało **znaczne braki** zwłaszcza w zakresie:
- Struktury HTML5
- Konfiguracji bazy danych (import.png)
- Logiki JavaScript i obsługi zdarzeń

Najłęższe błędy dotyczą **Jakuba Stefańskiego** (42,9%), który ma problemów z **prawie wszystkimi aspektami** pracy, a najlepsze wyniki to **Bartłomiej Wepa** i **Volodymyr Pestrak** (92,9%), którzy implementowali prawie wszystkie wymagania.
