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
 * HTTP Request Post
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Header
{
    const ACCEPT          = 'HTTP_ACCEPT';
    const ACCEPT_CHARSET  = 'HTTP_ACCEPT_CHARSET';
    const ACCEPT_ENCODING = 'HTTP_ACCEPT_ENCODING';
    const ACCEPT_LANGUAGE = 'HTTP_ACCEPT_LANGUAGE';
    const CONNECTION      = 'HTTP_CONNECTION';
    const HOST            = 'HTTP_HOST';
    const REFERER         = 'HTTP_REFERER';
    const USER_AGENT      = 'HTTP_USER_AGENT';

    /**
     * @param string $key
     */
    public function has ($key)
    {
        return isset($_SERVER[$key]);
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public function get ($key, $default = null)
    {
        return (isset($_SERVER[$key])) ? $_SERVER[$key] : $default;
    }
}