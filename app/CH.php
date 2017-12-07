<?php
/**
 * Created by PhpStorm.
 * User: leadingedge-new
 * Date: 12/7/2017
 * Time: 3:06 PM
 */

namespace App;


/**
 * Custom Helper functions
 * Class CH
 * @package App
 */
class CH
{

    /**
     * Full url to be returned
     * @var string
     */
    public static $url;

    /**
     * public directory name
     */
    public const PUBLIC_DIR_NAME = 'public/';

    /**
     * index script name
     */
    public const INDEX_SCRIPT_NAME = 'index.php/';


    /**
     * static method to return fullAssetUrl
     * url which is safe to use on production as well as on development env
     *
     * @param string $path
     * @return array|false|string
     */
    public static function getAssetUrl($path = '')
    {

        self::$url = getenv('APP_URL');
        if (getenv('SUB_URL') !== '') {
            self::$url .= getenv('SUB_URL');
        }

        if (getenv('SHOW_PUBLIC_DIR') != 'false') {
            self::$url .= self::PUBLIC_DIR_NAME;
        }

        if ($path !== '') {
            return self::$url . $path;
        } else {
            return self::$url;
        }
    }


    public static function getUrl($path = '')
    {

        self::$url = getenv('APP_URL');
        if (getenv('SUB_URL') !== '') {
            self::$url .= getenv('SUB_URL');
        }

        if (getenv('SHOW_PUBLIC_DIR') != 'false') {
            self::$url .= self::PUBLIC_DIR_NAME;
        }

        if (getenv('SHOW_INDEX_SCRIPT') != 'false') {
            self::$url .= self::INDEX_SCRIPT_NAME;
        }

        if ($path !== '') {
            return self::$url . $path;
        } else {
            return self::$url;
        }
    }


    public static function getSegment($segment)
    {
        echo self::$url;
    }
}