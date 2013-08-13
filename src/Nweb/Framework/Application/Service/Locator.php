<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Controller
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Application\Service;

/**
 * Basic application controller
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Controller
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
     * @param string $name
     * @return bool
     */
    public function has ($name)
    {
        return isset($this->services[$name]);
    }

    /**
     * @param string $name
     * @return callable
     */
    public function get ($name)
    {
        if (isset($this->services[$name])) {
            return $this->services[$name];
        }
    }

    /**
     * @param string $name
     * @param callable $callback
     */
    public function set ($name, $callback)
    {
        if (is_callable($callback)) {
            $this->services[$name] = $callback;
        } else {
            // @todo throw exception
        }
    }
}