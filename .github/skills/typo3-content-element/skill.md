---
name: TYPO3 v14 Content Blocks Generator
description: Strenge Arbeitsanweisung für TYPO3-v14-Content-Blocks mit deklarativen YAML-Definitionen, sauberer Fluid-Ausgabe und minimalem, praxisnahem Code.
---

# TYPO3 v14 Content Blocks Generator

Nutze diesen Skill ausschließlich, wenn ein neues Inhaltselement oder ein neues Feld für TYPO3 v14 angelegt oder angepasst werden soll. Arbeite konsequent deklarativ mit Content Blocks YAML.

## Verbindliche Leitplanken
- TYPO3 v14 zuerst denken: keine Legacy-Patterns, keine alten TCA-Ansätze, keine veralteten TypoScript-Strukturen.
- Nur Content Blocks YAML für Definitionen verwenden.
- Kein unnötiger Text, keine Erklärungen im Output.
- Kommentare im Code nur bei nicht offensichtlicher oder komplexer Logik.
- TSDoc/PHPDoc nur bei öffentlichen APIs, wiederverwendbaren Helpern oder erklärungsbedürftigen Parametern und Rückgaben.
- Ausgaben standardmäßig escaped halten.
- Unescaped-Ausgabe nur bei explizit vertrauenswürdigem Inhalt.

## Verzeichnisstruktur eines Elements
Jedes Element liegt unter `Build/Extensions/sitepackage/ContentBlocks/ContentElements/[element-name]/` und benötigt mindestens:
1. `config.yaml` als zentrale Konfiguration
2. `Source/Private/Templates/Frontend.html` als Fluid-Template
3. `Source/Private/Language/Labels.xlf` für Übersetzungen

## YAML-Konventionsregeln (`config.yaml`)
- **Name:** immer im Format `vendor/element-name`
- **Header wiederverwenden:** `header` standardmäßig mit `useExistingField: true`
- **Identifier:** technisch sauber, klein, snake_case
- **Feldgruppen:** logisch anordnen, keine unnötigen Felder
- **Assets:** immer mit sinnvollen Restriktionen definieren
- **Collections:** nur einsetzen, wenn wiederholbare Inhalte wirklich benötigt werden
- **Vorlagen:** keine Optionen angeben, die funktional keinen Nutzen haben

## Template-Regeln
- Fluid-Markup semantisch und barrierearm aufbauen.
- Partials standardmäßig mit `f:render` einbinden.
- Asset-URLs im Sitepackage über `f:uri.resource` erzeugen.
- Bilder mit `f:image` ausgeben.
- Collections mit `f:for` iterieren.
- Nur notwendige Conditions verwenden, nicht verschachteln ohne Grund.
- Keine Inline-Styles.

## A11y- und Interaktionsregeln
- Semantische HTML5-Elemente bevorzugen.
- Keyboard-Bedienung sicherstellen.
- Fokuszustände sichtbar halten.
- ARIA nur verwenden, wenn semantisches HTML nicht ausreicht.
- JavaScript nur als progressive Enhancement einsetzen.
- Nur Vanilla JS, keine Frameworks, kein jQuery.

## TYPO3-v14-Architektur
- Content Elements v14-konform und deklarativ aufbauen.
- TCA nur dort anfassen, wo es für die v14-Integration wirklich nötig ist.
- TypoScript nach aktuellen v14-Pfad- und Setup-Konventionen strukturieren.
- Keine Provisorien, keine Migrationskompatibilität zu älteren Versionen innerhalb des Skills.

## Standard-Ausgabeformat
Wenn Code erzeugt wird, liefere standardmäßig:
1. **Fluid-Markup**
2. **CSS-Snippet**

Zusätzlich nur wenn erforderlich:
- **JavaScript** bei Interaktion
- **TypoScript-Setup + TCA** bei neuem Content Element
- **TSconfig** nur bei Backend-Integration

## Boilerplate-Vorgaben
### YAML
- Immer ein vollständiges, direkt nutzbares Beispiel liefern.
- Beispielnamen konsistent und TYPO3-nah wählen.
- Felder so definieren, dass das Template ohne zusätzliche Annahmen funktioniert.

### Fluid
- Struktur direkt renderbar halten.
- Keine Demo-Kommentare im Markup.
- Verschachtelung nur, wenn sie den Aufbau wirklich abbildet.

### CSS
- Separat unter `Resources/Public/Css/` ablegen.
- Komponentenorientiert strukturieren.
- Design-Tokens über CSS Custom Properties definieren.
- Keine Inline-Styles.

## Qualitätskriterien
- Semantisch, barrierefrei und wiederverwendbar
- Kleine, klare Komponenten statt Monolithen
- Konsistente Benennung und Struktur
- Direkt im Projekt einsetzbar
- TYPO3 v14-konform ohne Umwege
