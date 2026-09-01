---
name: design
description: TYPO3-v14 Sitepackage Design-System für Farben, Spacing und Typografie.
---

## Zweck

Referenz für konsistente UI- und Frontend-Arbeit im Sitepackage.

## Regeln

- Vorhandene CSS-Variablen nutzen, keine neuen Hardcoded-Werte einführen, wenn ein Token existiert.
- Semantische Tokens bevorzugen.
- Spacing über Tokens oder bestehende TYPO3-Klassen abbilden.
- Typografie über die vorhandenen Font-, Size- und Line-Height-Tokens steuern.
- Komponenten so bauen, dass sie mit den vorhandenen Variablen skalieren.
- Keine CSS-Frameworks, keine Utility-Explosion, keine inline styles.

## Anwendung

- Buttons, Links, Hinweise und Formulare an vorhandenen Farb- und Button-Tokens ausrichten.
- Fokuszustände sichtbar und kontrastreich halten.
- Überschriften an die Typografie-Skala koppeln.
- Fließtext mit Basis-Typografie und vorhandenen Abständen gestalten.
- Bildunterschriften, Muted Text und Zentrierung über vorhandene Hilfsklassen umsetzen.
- Design-Tokens in global geladenen CSS-Dateien ablegen.
- Die bestehende Layer-Struktur respektieren.
- `frame-space-*` Klassen für TYPO3-Content-Abstände respektieren.
- Ausgabe modular, barrierearm und wartbar halten.

## Stil

- Direkt nutzbar
- Modular
- Barrierefrei
- Konsistent mit dem bestehenden Sitepackage
