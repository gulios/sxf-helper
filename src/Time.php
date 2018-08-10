<?php namespace SXF\Helper;

/**
 * Class Time
 * @package SXF\Helper
 */
class Time
{
    /**
     * @return array
     */
    public static function getTimeData()
    {
        $timeData = [
            'time' => date('H:i:s'),
            'timestamp' => time(),
            'microtime' => microtime(true),
            'timezone' => date_default_timezone_get(),
            'day' => date('d'),
            'month' => date('m'),
            'year' => date('Y'),
        ];

        return $timeData;
    }

    // TODO: more functions ?
}
