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

namespace Nweb\Framework;

use \Nweb\Framework\Application\Exception;
use Nweb\Framework\Event\Event;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Application
{
    const EVENT_EXCEPTION     = 'ApplicationException';
    const EVENT_PRE_DISPATCH  = 'ApplicationPreDispatch';
    const EVENT_POST_DISPATCH = 'ApplicationPostDispatch';
    
    
    /**
     * @var array
     */
    protected $modules;

    /**
     * @var \Nweb\Framework\Config
     */
    protected $serviceLocator;

    /**
     * @param array $modules
     */
    public function __construct (array $modules = array())
    {
        $this->modules = $modules;
    }

    /**
     * @return \Nweb\Framework\Application\Service\Locator
     */
    public function getServiceLocator ()
    {
        if (null === $this->serviceLocator) {
            $this->serviceLocator = new Application\Service\Locator();
        }
        return $this->serviceLocator;
    }

    /**
     */
    public function run ()
    {
        $serviceLocator = $this->getServiceLocator();
        $router         = new Application\Router();
        $dispatcher     = new Application\Dispatcher();
        $eventManager   = new Event\Manager();
        
        $serviceLocator->set('Router', $router);
        $serviceLocator->set('Dispatcher', $dispatcher);
        $serviceLocator->set('EventManager', $eventManager);
        
        try {
            foreach ($this->modules as $moduleObj) {
                if (!$moduleObj instanceof \Nweb\Framework\Application\Module) {
                    throw new Exception();
                }
                $moduleObj->setApplication($this);
            }
            if ($route = $router->findRoute()) {
                $eventManager->trigger(self::EVENT_PRE_DISPATCH, array($this));
                $dispatcher->dispatch($route->getHandler());
                $eventManager->trigger(self::EVENT_POST_DISPATCH, array($this));
            }
        } catch (\Exception $e) {
            $eventManager->trigger(self::EVENT_EXCEPTION, array($this, $e));
        }
    }
}