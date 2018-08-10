<?php namespace SXF\Helper;

/**
 * Class Path
 * @package SXF\Helper
 */
class Path
{
    /**
     * @param $path
     * @return string
     */
    public static function getRealPath($path)
    {
        return realpath($path) . DIRECTORY_SEPARATOR;
    }
}
