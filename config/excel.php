<?php

return [
    'exports' => [
        'csv' => [
            'use_bom' => false,
        ],
    ],
    'imports' => [
        'read_only' => true,
        'heading_row' => [
            'size' => 1,
        ],
    ],
    'extension_detector' => [
        'xlsx' => 'Office Open XML Spreadsheet',
        'xlsm' => 'Office Open XML Macro-Enabled Spreadsheet',
        'xls' => 'Office 97-2003 Worksheet',
        'csv' => 'CSV',
        'tsv' => 'TSV',
        'html' => 'HTML Table',
        'ods' => 'Open Document Spreadsheet',
        'pdf' => 'Portable Document Format',
    ],
    'temporary_files' => [
        'local_path' => sys_get_temp_dir(),
        'remote_disk' => null,
        'remote_path' => 'temporary_files',
    ],
];
