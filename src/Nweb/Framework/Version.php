<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Version
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework;

/**
 * Framework version
 *
 * @category    NwebFramework
 * @package     Version
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Version
{
    /**
     * Version
     */
    const VERSION = '0.1.0';

    /**
     * Latest version
     *
     * @var string
     */
    protected static $_latestVersion;

    /**
     * Version compare
     *
     * @param  string  $version version
     * @return integer [-1 older, 0 identical, +1 newer]
     */
    public static function compareVersion ($version)
    {
        return version_compare(strtolower($version), strtolower(self::VERSION));
    }

    /**
     * Get lates version numver
     *
     * @return string
     */
    public static function getLatestVersion ()
    {
        if (null === self::$_latestVersion) {
            self::$_latestVersion = 'not available';
            $handle = fopen('http://framework.nweb.pl/api/latest-version', 'r');
            if (false !== $handle) {
                self::$_latestVersion = stream_get_contents($handle);
                fclose($handle);
            }
        }
        return self::$_latestVersion;
    }
}