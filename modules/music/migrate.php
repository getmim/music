<?php

return [
    'Music\\Model\\Music' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'null' => false,
                    'unsigned' => true 
                ],
                'index' => 2000
            ],
            'album' => [
                'type' => 'INT',
                'attrs' => [
                    'null' => false,
                    'unsigned' => true 
                ],
                'index' => 3000
            ],
            'title' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false 
                ],
                'index' => 4000
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false,
                    'unique' => true
                ],
                'index' => 5000
            ],
            'file' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 6000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 7000
            ],
            'meta' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 8000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ]
    ],
    'Music\\Model\\MusicAlbum' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'null' => false,
                    'unsigned' => true 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false 
                ],
                'index' => 3000
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false,
                    'unique' => true
                ],
                'index' => 4000
            ],
            'cover' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 5000
            ],
            'author' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [],
                'index' => 6000
            ],
            'meta' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 7000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 8000
            ],
            'release' => [
                'type' => 'DATE',
                'attrs' => [
                    'null' => TRUE
                ],
                'index' => 9000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];