---
name: TYPO3 v14 Content Blocks Generator
description: Strenge Arbeitsanweisung für TYPO3-v14-Content-Blocks mit deklarativen YAML-Definitionen und sauberer Fluid-Ausgabe.
---

# TYPO3 v14 Content Blocks Generator

Nutze diesen Skill nur für neue oder angepasste Inhaltselemente bzw. Felder in TYPO3 v14.

## Leitplanken

- TYPO3 v14-konform arbeiten, keine Legacy-Patterns.
- Nur Content Blocks YAML für Definitionen verwenden.
- Keine unnötigen Erklärungen im Output.
- Kommentare nur bei komplexer Logik.
- TSDoc/PHPDoc nur bei öffentlichen APIs oder erklärungsbedürftigen Parametern und Rückgaben.
- Ausgaben standardmäßig escaped halten.
- Unescaped-Ausgabe nur bei vertrauenswürdigem Inhalt.

## Element-Struktur

Jedes Element liegt unter `packages/site_package/Build/Extensions/sitepackage/ContentBlocks/ContentElements/[element-name]/` und benötigt mindestens:

1. `config.yaml`
2. `Source/Private/Templates/Frontend.html`
3. `Source/Private/Language/Labels.xlf`

## YAML

- Name im Format `vendor/element-name`
- `header` standardmäßig mit `useExistingField: true`
- Identifier klein und snake_case
- Felder nur, wenn sie wirklich gebraucht werden
- Assets mit sinnvollen Restriktionen definieren
- Collections nur für echte Wiederholungen
- Keine Optionen ohne funktionalen Nutzen

## Fluid

- Semantisch und barrierearm aufbauen
- Partials mit `f:render` einbinden
- Asset-URLs über `f:uri.resource` erzeugen
- Bilder mit `f:image` ausgeben
- Collections mit `f:for` iterieren
- Keine Inline-Styles

## A11y und Interaktion

- Semantische HTML5-Elemente bevorzugen
- Keyboard-Bedienung sicherstellen
- Fokuszustände sichtbar halten
- ARIA nur verwenden, wenn Semantik nicht reicht
- JavaScript nur als progressive Enhancement einsetzen
- Nur Vanilla JS, keine Frameworks, kein jQuery

## TYPO3-v14-Architektur

- Content Elements deklarativ aufbauen
- TCA nur anfassen, wenn es für die v14-Integration nötig ist
- TypoScript nach aktuellen v14-Pfad- und Setup-Konventionen strukturieren
- Keine Provisorien

## Ausgabeformat

Wenn Code erzeugt wird, liefere standardmäßig:

1. Fluid-Markup
2. CSS-Snippet

Zusätzlich nur wenn erforderlich:

- JavaScript bei Interaktion
- TypoScript-Setup + TCA bei neuem Content Element
- TSconfig nur bei Backend-Integration

## CSS

- Separat unter `packages/site_package/Resources/Public/Css/` ablegen
- Komponentenorientiert strukturieren
- Design-Tokens über CSS Custom Properties definieren
- Keine Inline-Styles

## Qualitätskriterien

- Semantisch, barrierefrei und wiederverwendbar
- Kleine, klare Komponenten statt Monolithen
- Konsistente Benennung und Struktur
- Direkt im Projekt einsetzbar
- TYPO3 v14-konform ohne Umwege
