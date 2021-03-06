<?php

return [
    'title'   => 'Synchronization',
    'import'  => 'Import',
    'export'  => 'Export',
    'preview' => 'Preview',

    'functions' => [
        'ignore'           => 'Ignore',
        'create_attribute' => 'Create attribute',
    ],

    'dictionary'      => 'Dictionary',
    'delimiter'       => 'Delimiter',
    'enclosure'       => 'Enclosure',
    'newline'         => 'Newline',
    'encoding'        => 'File encoding',
    'newline_options' => [
        'breakline' => 'Line break',
    ],
    'entity'          => 'Entity',

    'options' => [
        'use_dictionary' => 'Use default dictionary',
    ],

    'messages' => [
        'errors'  => [
            'no_file'          => 'No file has been uploaded',
            'ignored_or_empty' => 'All input columns are ignored or file is empty',
            'empty'            => 'Input data is empty',
        ],
        'success' => [
            'imported' => 'Data imported succesfully',
        ],
    ],

    'help' => [

        'refresh' => [

            'title'       => 'Export refresh',
            'description' => 'All export sources are regenerated at the moment, when their respective entities are updated. Typically this can refer to updating/deletion/creation etc.',
            'cron'        => 'As all the exports are done per action, you don\'t have to set up CRON operation. If you still wish to perfom regular updates of export source, you will find link for that below.',

        ],

    ],

    'cols' => [
        'general'                    => 'General:',
        'platformusers'              => 'Individual:',
        'sleighdogsprofilecorporate' => 'Corporate:',

    ],

    'max_allowed_size' => 'Maximum allowed file size is :size',

];