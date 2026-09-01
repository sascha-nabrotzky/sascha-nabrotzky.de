# Copilot-Anweisungen (TYPO3 v14 Sitepackage)

## Ziel
Implementiere TYPO3-v14-konformen, direkt nutzbaren Code für Frontend/UI-Prototyping im Sitepackage: modular, barrierefrei, wartbar, ohne unnötige Erklärtexte.

## Stack
- TYPO3 CMS v14
- Fluid Templates/Partials/Layouts
- Semantisches HTML5
- Modernes Vanilla CSS (Grid, Flexbox, Custom Properties)
- Vanilla JavaScript (ES6+)
- TypoScript + TSconfig nach v14-Konventionen
- **Keine** CSS/JS-Frameworks (kein Tailwind, Bootstrap, jQuery)

## Verbindliche Arbeitsregeln
1. **Sprache:** Antworte immer auf Deutsch.
2. **Output knapp halten:** Nur Ergebnis liefern, keine langen Erklärungen.
3. **Kommentare im Code:**  
   - Keine typischen AI-Erklärkommentare.  
   - Kommentare nur bei komplexer, nicht offensichtlicher Logik.  
   - TSDoc/PHPDoc nur bei öffentlichen APIs, Helpern mit Vertrag oder erklärungsbedürftigen Parametern/Returns.
4. **Bei fehlenden Details:** Sinnvolle Annahmen treffen und umsetzen; nur bei echten Blockern Rückfragen stellen.
5. **Keine Legacy-Patterns:** Nur moderne TYPO3-v14-Ansätze.

## Fluid/Template-Regeln
- HTML-Strukturen als Fluid umsetzen.
- Partials standardmäßig mit `f:render` einbinden.
- Ausgaben standardmäßig escaped behandeln; unescaped/`f:format.html` nur bei vertrauenswürdigem Inhalt.
- Asset-URLs über `f:uri.resource` aus dem Sitepackage erzeugen.

## CSS-Regeln
- CSS in separaten Dateien unter `Resources/Public/Css/`.
- Struktur klar und komponentenorientiert (z. B. BEM).
- Design-Tokens über CSS Custom Properties (Farben, Spacing, Typografie).
- Keine Inline-Styles.

## JavaScript- & A11y-Regeln
- Nur Vanilla JS, progressive Enhancement.
- WCAG-2.1-konforme Interaktion (inkl. sinnvoller ARIA-Attribute, Keyboard-Nutzung, Fokuszustände).

## TYPO3-v14-Architektur
- Content Elements v14-konform mit DataProcessor-Architektur.
- TCA sauber in `Configuration/TCA/Overrides/tt_content.php` nach v14-API registrieren.
- TypoScript nach aktuellen v14-Pfad-/Setup-Konventionen.

## Ausgabeformat (Standard)
Wenn Code erzeugt wird, liefere standardmäßig:
1. **Fluid-Markup**
2. **CSS-Snippet**

Zusätzlich nur wenn erforderlich:
- **JavaScript** (bei Interaktion)
- **TypoScript-Setup + TCA** (immer bei neuem Content Element)
- **TSconfig** (nur wenn für Backend-Integration nötig)

## Qualitätskriterien
- Semantisch, barrierefrei, wiederverwendbar
- Kleine, klare Komponenten statt Monolithen
- Konsistente Benennung und Struktur
- Direkt im Projekt einsetzbar
