---
name: TYPO3 v14 Content Blocks Generator
description: Erstellt strukturierte Inhaltselemente auf Basis der modernen Content Blocks Extension inklusive Assets und Collections.
---

# TYPO3 v14 Content Blocks Generator

Nutze diesen Skill, wenn der User ein neues Inhaltselement oder ein neues Feld anlegen möchte. Wir nutzen ausnahmslos den deklarativen YAML-Ansatz.

## Verzeichnisstruktur eines Elements
Jedes Element liegt unter `Build/Extensions/sitepackage/ContentBlocks/ContentElements/[element-name]/` und benötigt:
1. `config.yaml` (Zentrale Konfiguration)
2. `Source/Private/Templates/Frontend.html` (Fluid-Template)
3. `Source/Private/Language/Labels.xlf` (Übersetzungen)

## YAML-Konventionsregeln (`config.yaml`)
- **Name:** Immer im Format `vendor/element-name`
- **Standard-Felder wiederverwenden:** Nutze standardmäßig `useExistingField: true` für `header`.
- **Feld-Mapping:** Identifier in Snake-Case (`teaser_image`) werden im Fluid-Template automatisch zu Camel-Case (`teaserImage`).

## Code-Schablonen (Boilerplates)

### 1. Erweiterte `config.yaml` (mit Asset und Collection)
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

  # BILD-KONFIGURATION (Asset)
  - identifier: main_image
    type: Asset
    label: 'Hauptbild'
    maxitems: 1
    allowedFileExtensions: 'jpg,jpeg,png,svg,webp'

  # VERSCHACHTELUNG (Collection / Inline-Element)
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
Bilder werden als File-Referenzen übergeben (Nutzung mit `<f:image>`). Collections werden als Array übergeben und mit `<f:for>` iteriert.

```html
<html xmlns:f="http://typo3.org" data-namespace-typo3-fluid="true">
<div class="ce-feature-list">
    <h2>{header}</h2>

    <!-- 1. Bild-Ausgabe (Asset) -->
    <f:if condition="{mainImage.0}">
        <div class="ce-feature-list__image">
            <f:image image="{mainImage.0}" maxWidth="800" alt="{mainImage.0.alternative}" />
        </div>
    </f:if>

    <!-- 2. Verschachtelung-Ausgabe (Collection) -->
    <f:if condition="{features}">
        <ul class="ce-feature-list__items">
            <f:for each="{features}" as="feature">
                <li class="ce-feature-list__item">
                    <!-- Icon innerhalb der Collection -->
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
