---
name: design
description: TYPO3-v14 Sitepackage Design-System für Farben, Spacing und Typografie.
---

## Zweck

Dieses Skill beschreibt das bestehende kleine Design-System im Sitepackage und dient als Referenz für konsistente UI- und Frontend-Arbeit.

## Token-Quellen

### Farben
- `--color-black`
- `--color-black-10-transp`
- `--color-black-50-transp`
- `--color-black-75-transp`
- `--color-black-97-transp`
- `--color-white`
- `--color-white-50-transp`
- `--color-sand`
- `--color-orange`
- `--color-yellow`

Semantische Alias-Tokens:
- `--color-call-to-action`
- `--color-secondary`
- `--color-focus`
- `--color-shadow-default`
- `--btn-call-to-action`
- `--btn-call-to-action-text`
- `--btn-cancel`

### Spacing
- `--spacing-xs`
- `--spacing-sm`
- `--spacing-md`
- `--spacing-lg`
- `--spacing-xl`

TYPO3-Abstände:
- `.frame-space-before-extra-small`
- `.frame-space-before-small`
- `.frame-space-before-medium`
- `.frame-space-before-large`
- `.frame-space-before-extra-large`
- `.frame-space-after-extra-small`
- `.frame-space-after-small`
- `.frame-space-after-medium`
- `.frame-space-after-large`
- `.frame-space-after-extra-large`

### Typografie
- `--ff-sans`
- `--ff-italic`
- `--fs-xs`
- `--fs-sm`
- `--fs-base`
- `--fs-lg`
- `--fs-xl`
- `--fs-2xl`
- `--fs-3xl`
- `--fs-4xl`
- `--fs-5xl`
- `--lh-xs`
- `--lh-sm`
- `--lh-md`
- `--lh-base`
- `--ltrsp-lg`
- `--wrdsp-lg`

## Regeln für die Umsetzung

- Immer die vorhandenen CSS-Variablen nutzen, keine neuen Hardcoded-Werte einführen, wenn ein Token bereits existiert.
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
