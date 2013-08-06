<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Http\Request;

/**
 * HTTP Response Cookie
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 * @link        http://www.faqs.org/rfcs/rfc2616
 */
class Query
{
    /**
     * @param string $key
     */
    public function has ($key)
    {
        return isset($_GET[$key]);
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public function get ($key, $default = null)
    {
        return (isset($_GET[$key])) ? $_GET[$key] : $default;
    }
}