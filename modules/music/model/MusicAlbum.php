<?php
/**
 * MusicAlbum
 * @package music
 * @version 0.0.1
 */

namespace Music\Model;

class MusicAlbum extends \Mim\Model
{

    protected static $table = 'music_album';

    protected static $chains = [];

    protected static $q = ['name'];
}