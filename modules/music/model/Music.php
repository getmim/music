<?php
/**
 * Music
 * @package music
 * @version 0.0.1
 */

namespace Music\Model;

class Music extends \Mim\Model
{

    protected static $table = 'music';

    protected static $chains = [
        'album' => [
            'model' => 'Music\\Model\\MusicAlbum',
            'field' => 'id'
        ]
    ];

    protected static $q = ['title'];
}