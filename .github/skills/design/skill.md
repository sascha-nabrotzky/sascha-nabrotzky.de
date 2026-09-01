---
name: design
description: TYPO3-v14 Sitepackage Design-System für Farben, Spacing und Typografie.
---

## Zweck

Dieses Skill beschreibt das bestehende kleine Design-System im Sitepackage und dient als Referenz für konsistente UI- und Frontend-Arbeit.

## Regeln für die Umsetzung

- Immer die vorhandenen CSS-Variablen nutzen, keine neuen Hardcoded-Werte einführen, wenn ein Token bereits existiert. Unter packages/site_package/Resources/Public/Css/ liegen Tokens und Custom Properties für Color, Typography und Spacing.
- Semantische Tokens bevorzugen, z. B. `--color-call-to-action` statt direkt `--color-orange`.
- Spacing ausschließlich über Token oder bestehende TYPO3-Klassen abbilden.
- Typografie über die bestehenden Font-, Size- und Line-Height-Tokens steuern.
- Neue Komponenten so bauen, dass sie mit den vorhandenen Variablen skalieren.
- Keine CSS-Frameworks, keine Utility-Explosion, keine inline styles.

## Anwendungsrichtlinien

### UI-Komponenten
- Buttons, Links, Hinweise und Formulare an den vorhandenen Farb- und Button-Tokens ausrichten.
- Fokuszustände immer sichtbar und kontrastreich gestalten.
- Lesbarkeit und Hierarchie über `font-size`, `line-height` und Abstände sauber abstufen.

### Inhaltselemente
- Überschriften an die bestehende Typografie-Skala koppeln.
- Fließtext mit der Basis-Typografie und den vorhandenen Abständen gestalten.
- Bildunterschriften, Muted Text und Zentrierung über vorhandene Hilfsklassen umsetzen.

## Umsetzungshinweise für TYPO3 v14

- Design-Tokens gehören in die global geladenen CSS-Dateien des Sitepackages.
- Neue Komponenten müssen sich in die bestehende Layer-Struktur einfügen.
- TYPO3-Content-Abstände über die vorhandenen `frame-space-*` Klassen respektieren.
- Ausgabe soll modular, barrierearm und wartbar bleiben.

## Stil

- Direkt nutzbar
- Modular
- Barrierefrei
- Konsistent mit dem bestehenden Sitepackage
