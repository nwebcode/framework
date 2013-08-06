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
class Post
{
    /**
     * @param string $key
     */
    public function has ($key)
    {
        return isset($_POST[$key]);
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public function get ($key, $default = null)
    {
        return (isset($_POST[$key])) ? $_POST[$key] : $default;
    }

    /**
     * @return string
     */
    public function raw ()
    {
        if (isset($HTTP_RAW_POST_DATA)) {
            return $HTTP_RAW_POST_DATA;
        }
        return file_get_contents('php://input');
    }
}