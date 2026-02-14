<?php
/**
 * PrivateBin
 *
 * a zero-knowledge paste bin
 *
 * @link      https://github.com/PrivateBin/PrivateBin
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   https://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 * @version   1.5.1
 */

namespace PrivateBin;

use Exception;

/**
 * Filter
 *
 * Provides data filtering functions.
 */
class Filter
{
    /**
     * format a given time into a human readable label (localized)
     *
     * This implementation requires two arguments: an integer value and a unit
     * string (for example `5, 'min'`). It does not perform legacy string
     * parsing; callers must pass separated arguments.
     *
     * @access public
     * @static
     * @param  int $value   integer time value
     * @param  string $unit time unit (e.g. 'min', 'sec', 'weeks')
     * @throws Exception
     * @return string
     */
    public static function formatHumanReadableTime(int $value, string $unit): string
    {
        switch ($unit) {
            case 'sec':
            case 'second':
            case 'seconds':
                $singular = 'second';
                break;
            case 'min':
            case 'minute':
            case 'minutes':
                $singular = 'minute';
                break;
            default:
                $singular = rtrim($unit, 's');
        }

        return I18n::_(array('%d ' . $singular, '%d ' . $singular . 's'), $value);
    }

    /**
     * format a given number of bytes in IEC 80000-13:2008 notation (localized)
     *
     * @access public
     * @static
     * @param  int $size
     * @return string
     */
    public static function formatHumanReadableSize($size)
    {
        $iec = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
        $i   = 0;
        while (($size / 1024) >= 1) {
            $size = $size / 1024;
            ++$i;
        }
        return number_format($size, ($i ? 2 : 0), '.', ' ') . ' ' . I18n::_($iec[$i]);
    }
}
