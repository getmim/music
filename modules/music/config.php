<?php

return [
    '__name' => 'music',
    '__version' => '0.3.0',
    '__git' => 'git@github.com:getmim/music.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/music' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-media' => NULL
            ]
        ],
        'optional' => [
            [
                'profile' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [
            'Music\\Model' => [
                'type' => 'file',
                'base' => 'modules/music/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'music' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'user'
                ],
                'album' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Music\\Model\\MusicAlbum',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'music-album'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'file' => [
                    'type' => 'media'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'music-album' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'cover' => [
                    'type' => 'media'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'release' => [
                    'type' => 'number'
                ],
                'author' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
