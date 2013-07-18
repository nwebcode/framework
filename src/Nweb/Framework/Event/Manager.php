<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Event;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Manager
{
    /**
     * @var \Nweb\Framework\Config
     */
    protected $namespace;

    /**
     * @var array
     */
    protected $events;

    /**
     * @param array $config
     */
    public function __construct ($namespace = null)
    {}

    /**
     */
    public function attach ()
    {

    }

    /**
     */
    public function trigger ($eventName, array $params = array())
    {
        if (isset($this->events[$eventName])) {
            call_user_func_array(
                array($this->events[$eventName], 'trigger'), $params
            );
        }
    }
}