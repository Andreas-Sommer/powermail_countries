<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "powermail_voucher"
 *
 * Auto generated by Extension Builder 2019-10-11
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Country',
    'description' => 'Improve Country selection based on static_info_tables with Powermail',
    'category' => 'plugin',
    'author' => 'Andreas Sommer',
    'author_email' => 'sommer@belsignum.com',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
			'powermail' => '7.0.0-7.9.99',
			'static_info_tables' => '6.9.0-6.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
