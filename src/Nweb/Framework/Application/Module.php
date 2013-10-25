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
abstract class Module
{
    /**
     * @var \Nweb\Framework\Application
     */
    protected $appObj;
    
    /**
     * 
     */
    abstract public function init();
    
    /**
     * @param \Nweb\Framework\Application $appObj
     */
    public function setApplication (\Nweb\Framework\Application $appObj)
    {
    	$this->appObj = $appObj;
    }
    
    /**
     * @return \Nweb\Framework\Application
     */
    public function getApplication ()
    {
    	return $this->appObj;
    }
    
    /**
     * @return \Nweb\Framework\Application
     */
    public function getService ($name)
    {
    	return $this->getApplication()->getServiceLocator()->get($name);
    }
}