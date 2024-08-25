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
                 'Quer' => [
                     'title' => 'Querformat',
                     'value' => 16 / 9
                 ],
                 'Hoch' => [
                     'title' => 'Hochformat',
                     'value' => 1 / 1.41
                 ],
                 'Frei' => [
                     'title' => 'Frei',
                     'value' => 0.0
                 ],
             ],
        ],
         'quadratisch' => [
            'title' => 'Quadratisch',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
            ],
        ],
     ]
];