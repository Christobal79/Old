<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "ot_bootstrap3"
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

// @see https://docs.typo3.org/typo3cms/CoreApiReference/ExtensionArchitecture/DeclarationFile/Index.html
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap 3 Basis Template',
    'description' => 'Bootstrap 3.3.7 basis template',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mailYYYY@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => false,
    'createDirs' => '',
    'dividers2tabs' => true,
    'clearCacheOnLoad' => true,
    'version' => '8.7.0',
    'excludeFromUpdates' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
            'fluid_styled_content' => ''
        ],
        'conflicts' => [],
        'suggests' => [
            'ot_collapse' => '8.7.0-7.9.99',
            'ot_divider' => '8.8.0-7.9.99'
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OliverThiele\\OtBootstrap3\\' => 'Classes'
        ]
    ]
];
