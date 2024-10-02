<?php
defined('TYPO3') || die();

$table = 'sys_file_reference';
$field = 'crop';

$GLOBALS['TCA'][$table]['columns'][$field]['config'] = [
     'type' => 'imageManipulation',
     'cropVariants' => [
        'default' => [
            'title' => 'Default',
            'allowedAspectRatios' => [
                 '16:9' => [
                     'title' => '16:9',
                     'value' => 16 / 9
                 ],
                 '4:3' => [
                    'title' => '4:3',
                    'value' => 4 / 3
                ],
                 '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
                'DIN Hoch' => [
                     'title' => 'DIN Hoch',
                     'value' => 5 / 7
                 ],
                'DIN Quer' => [
                     'title' => 'DIN Quer',
                     'value' => 7 / 5
                 ],
                 'Frei' => [
                     'title' => 'Frei',
                     'value' => 0.0
                 ],
             ],
        ],
     ]
];