<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Service
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Application\Service;

/**
 * Service Locator
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Service
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Locator
{
    /**
     * @var array
     */
    protected $services = array();

    /**
     * @var array
     */
    protected $shared = array();

    /**
     * @var array
     */
    protected $params = array();

    /**
     * @param string $name
     * @return bool
     */
    public function has ($name)
    {
        return isset($this->services[$name]);
    }

    /**
     *
     * @param string $name
     * @param array $params
     * @return mixed
     */
    public function get ($name, array $params = null)
    {
        if (null === $params) {
            if (isset($this->params[$name])) {
                $params = $this->params[$name];
            } else {
                $params = array();
            }
        }

        if (isset($this->services[$name])) {
            return call_user_func_array($this->services[$name], $params);
        }

        if (class_exists($name, true)) {
            return new $name ($params);
        }

        if (function_exists($name, true)) {
            return $name ($params);
        }

        return null;
    }

    /**
     * @param string $name
     * @param callable $callback
     */
    public function set ($name, $callback, array $params = null)
    {
        if (is_callable($callback)) {
            if (null !== $params) {
                $this->params[$name] = $params;
            }
            $this->services[$name] = $callback;
        } else {
            // @todo throw exception
        }
    }
}