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
     * @param string $name
     * @return bool
     */
    public function has ($name)
    {
        return isset($this->services[$name]);
    }

    /**
     * @param string $name
     * @return object
     */
    public function get ($name)
    {
        if (!isset($this->params[$name])) {
            $params = $this->params[$name];
        }
        return $this->services[$name];
    }

    /**
     * @param string $name
     * @param object $serviceObj
     */
    public function set ($name, $serviceObj)
    {
        $this->services[$name] = $serviceObj;
    }
}