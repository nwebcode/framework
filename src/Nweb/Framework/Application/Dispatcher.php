<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Module
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Application;

/**
 * Basic application module
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Module
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Dispatcher
{
    /**
     * @var \Nweb\Framework\Application
     */
    protected $app = null;

    /**
     * @var string|\Nweb\Framework\Application\Controller
     */
    protected $controller = null;

    /**
     * @var string
     */
    protected $action = null;

    /**
     * @var array
     */
    protected $params = array();

    /**
     * @var bool
     */
    protected $next = false;

    /**
     * @param \Nweb\Framework\Application $app
     */
    public function setApplication (\Nweb\Framework\Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return \Nweb\Framework\Application
     */
    public function getApplication ()
    {
        return $this->app;
    }

    /**
     * @param string $controller
     */
    public function setController ($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @param string $action
     */
    public function setAction ($action)
    {
        $this->action = $action;
    }

    /**
     * @param array $params
     */
    public function setParams (array $params)
    {
        $this->params = $params;
    }

    /**
     */
    public function next ()
    {
        $this->next = true;
    }

    /**
     */
    public function dispatch ()
    {
        $eventManager   = $this->getApplication()->getEventManager();
        $serviceLocator = $this->getApplication()->getServiceLocator();
        $dependencyInjection = $this->getApplication()->getDependencyInjection();

        do {
            if (is_string($this->controller)) {
                if ($serviceLocator->has($this->controller)) {
                    $obj = $serviceLocator->get($this->controller);
                } else {
                    if (!class_exists($this->controller, true)) {
                        // throw exception
                    }
                    $class = $this->controller;
                    $obj = new $class();
                }
            } else {
                $obj = $this->controller;
            }

            if (!is_object($obj) || !$obj instanceof \Nweb\Framework\Application\Controller) {
                // throw exception
            }

            if ($obj instanceof Service\LocatorAware) {
                $obj->setServiceLocator($serviceLocator);
            }




            $method = $this->action . 'Action';
            if (method_exists($obj, $method)) {
                $obj->setApplcation($this->getApplication());

                $results = call_user_func_array(array($obj, $method), $this->params);

                if ($results instanceof Response) {
                    $results->setController($obj);
                    $results->send();
                }
            } else {
                // throw exception
            }
        } while ($this->next);
    }
}