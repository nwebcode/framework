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

namespace Nweb\Framework\Application;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Router
{
    /**
     * @var array
     */
    protected $routes = array();
    
    /**
     * @var array
     */
    protected $default = array();
    
    /**
     * 
     */
	public function findRoute ()
	{
	}
    
	/**
	 * 
	 * @param Router\Route $route
	 * @param string $mode
	 */
	public function addRoute (Router\RouteInterface $route, $mode = self::ADD_APPEND)
	{
	}
    
	/**
	 * 
	 * @param Router\Route $route
	 * @param string $mode
	 */
	public function setDefaultRoute (Router\RouteInterface $route)
	{
	}
}