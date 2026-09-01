---
name: TYPO3 v14 Content Blocks Generator
description: Erstellt strukturierte Inhaltselemente auf Basis der modernen Content Blocks Extension inklusive Assets und Collections.
---

# TYPO3 v14 Content Blocks Generator

Nutze diesen Skill, wenn ein neues Inhaltselement oder ein neues Feld angelegt werden soll. Arbeite dabei ausnahmslos mit dem deklarativen YAML-Ansatz.

## Verzeichnisstruktur eines Elements
Jedes Element liegt unter `Build/Extensions/sitepackage/ContentBlocks/ContentElements/[element-name]/` und benötigt:
1. `config.yaml` als zentrale Konfiguration
2. `Source/Private/Templates/Frontend.html` als Fluid-Template
3. `Source/Private/Language/Labels.xlf` für Übersetzungen

## YAML-Konventionsregeln (`config.yaml`)
- **Name:** immer im Format `vendor/element-name`
- **Standard-Felder wiederverwenden:** `header` standardmäßig mit `useExistingField: true`
- **Feld-Mapping:** Snake-Case-Identifiers wie `teaser_image` werden im Fluid-Template zu Camel-Case wie `teaserImage`
- **Struktur:** Felder klar gruppieren und nur die Optionen setzen, die das Element wirklich braucht

## Code-Schablonen (Boilerplates)

### 1. Erweiterte `config.yaml` mit Asset und Collection
```yaml
name: saschanabrotzky/feature-list
title: 'Feature Liste'
description: 'Ein Element mit Hauptbild und einer Liste von Vorteilen'
icon: 'content-boot-icon'
basics:
  - TYPO3/Appearance
fields:
  - identifier: header
    useExistingField: true

  - identifier: main_image
    type: Asset
    label: 'Hauptbild'
    maxitems: 1
    allowedFileExtensions: 'jpg,jpeg,png,svg,webp'

  - identifier: features
    type: Collection
    label: 'Features'
    itemTitle: 'Vorteil'
    fields:
      - identifier: sub_title
        type: Text
        max: 80
      - identifier: description
        type: Textarea
      - identifier: item_icon
        type: Asset
        maxitems: 1
```

### 2. Zugehöriges Fluid-Template (`Frontend.html`)
Bilder werden als File-Referenzen übergeben und mit `<f:image>` ausgegeben. Collections werden als Array übergeben und mit `<f:for>` iteriert.

```html
<html xmlns:f="http://typo3.org" data-namespace-typo3-fluid="true">
<div class="ce-feature-list">
    <h2>{header}</h2>

    <f:if condition="{mainImage.0}">
        <div class="ce-feature-list__image">
            <f:image image="{mainImage.0}" maxWidth="800" alt="{mainImage.0.alternative}" />
        </div>
    </f:if>

    <f:if condition="{features}">
        <ul class="ce-feature-list__items">
            <f:for each="{features}" as="feature">
                <li class="ce-feature-list__item">
                    <f:if condition="{feature.itemIcon.0}">
                        <f:image image="{feature.itemIcon.0}" maxWidth="40" alt="" />
                    </f:if>

                    <h3>{feature.subTitle}</h3>
                    <p>{feature.description}</p>
                </li>
            </f:for>
        </ul>
    </f:if>
</div>
</html>
```

## Hinweise zur Ausgabe
- Standardmäßig nur das Nötige liefern
- Keine erklärenden AI-Kommentare im Beispielcode
- Kommentare nur bei nicht offensichtlicher oder komplexer Logik
- TSDoc/PHPDoc nur bei öffentlichen APIs, Helpern mit Vertrag oder erklärungsbedürftigen Parametern und Rückgaben

## Qualitätskriterien
- Semantisch, barrierefrei und wiederverwendbar
- Kleine, klare Komponenten statt Monolithen
- Konsistente Benennung und Struktur
- Direkt im Projekt einsetzbar
