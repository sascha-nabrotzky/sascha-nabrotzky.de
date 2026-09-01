# GitHub Copilot Anweisungen für TYPO3 v14 Prototyping

## Projekt-Kontext
- **System:** TYPO3 CMS v14 (aktuelle Core-Architektur).
- **Fokus:** Front-End Design, UI-Prototyping, Sitepackage-Entwicklung.
- **Ziel:** Erstellung modularer, barrierefreier und nativer Fluid-Komponenten ohne CSS-Frameworks.

## Technologie-Stack & Standards
- **HTML/CSS:** Semantisches HTML5, modernes Vanilla CSS (CSS Grid, Flexbox, Custom Properties/Variablen).
- **Keine Frameworks:** Verwende kein Tailwind CSS, Bootstrap oder jQuery.
- **Template-Engine:** TYPO3 Fluid (Moderne ViewHelper, Strict Syntax, Partials und Layouts).
- **JavaScript:** Natives JavaScript (ES6+ / Vanilla JS). Barrierefrei nach WCAG 2.1 (inklusive ARIA-Attribute).
- **Konfiguration:** TYPO3 v14 TypoScript (neue Pfad- und Setup-Konventionen ohne Altlasten) und TSconfig.

## Code-Richtlinien (Coding Standards)

### 1. TYPO3 Fluid Templates
- Alle HTML-Strukturen müssen in TYPO3 Fluid geschrieben werden.
- Nutze standardmäßig `f:render` für Partials (`<f:render partial="Header" arguments="{_all}" />`).
- Beachte die TYPO3 v14 Fluid-Standards: Maskiere Ausgaben konsequent gegen XSS (z. B. via `f:format.html` oder Inline-Casting).
- Verwende für Asset-Pfade (CSS, JS, Bilder) immer den `f:uri.resource`-ViewHelper bezogen auf das Sitepackage.

### 2. Styling (Modern Vanilla CSS)
- Schreibe sauberes, semantisches HTML mit logischen CSS-Klassen (z. B. nach BEM-Methodik, falls gewünscht).
- CSS wird in separaten Stylesheets im Sitepackage (`Resources/Public/Css/`) organisiert, nicht inline und in einer Barrel-Datei importiert und dort nach @layer organisiert.
- Nutze CSS Custom Properties für Farbthemen, Spacings und Schriftarten, um das Design wartbar zu halten.

### 3. TYPO3 v14 Architektur & Sitepackages
- Nutze für Inhaltselemente (Content Elements) die v14-konforme DataProcessor-Architektur.
- Erzeuge TCA-Konfigurationen (`Configuration/TCA/Overrides/tt_content.php`) strikt nach v14-API-Vorgaben (z. B. korrekte Registrierung von Inhaltselementen).

## Tonalität & Ausgabe
- Antworte immer auf **Deutsch**.
- Liefere direkt einsatzbereiten Code: Bei neuen Elementen immer das Fluid-Markup UND das passende CSS-Snippet trennen.
- Wenn ein neues Inhaltselement erstellt wird, generiere zusätzlich das TypoScript-Setup und die TCA-Datei.
