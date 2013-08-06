<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Http;

/**
 * Response HTTP
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Request
{
    /**
     */
    public function getBaseUrl ()
    {
    }

    /**
     */
    public function getRequestUri ()
    {
    }

    /**
     */
    public function getPath ()
    {
    }

    /**
     */
    public function getParam ($key, $default = null)
    {
    }

    /**
     */
    public function getHeader ($key, $default = null)
    {
    }

    /**
     */
    public function getQuery ($key = null, $default = null)
    {
    }

    /**
     */
    public function getPost ($key = null, $default = null)
    {
    }

    /**
     */
    public function getRawPost ()
    {
    }

    /**
     */
    public function isPost ()
    {
        return strcasecmp($_SERVER['REQUEST_METHOD'], 'post') === 0;
    }

    /**
     */
    public function isGet ()
    {
        return strcasecmp($_SERVER['REQUEST_METHOD'], 'get') === 0;
    }

    /**
     */
    public function isDelete ()
    {
        return strcasecmp($_SERVER['REQUEST_METHOD'], 'delete') === 0;
    }

    /**
     */
    public function isPut ()
    {
        return strcasecmp($_SERVER['REQUEST_METHOD'], 'put') === 0;
    }

    /**
     */
    public function isHead ()
    {
        return strcasecmp($_SERVER['REQUEST_METHOD'], 'head') === 0;
    }

    /**
     */
    public function isSecure ()
    {
    }
}