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

namespace Nweb\Framework\Application;

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
class Controller
{
    /**
     * @var \Nweb\Framework\Application
     */
    protected $application;

    /**
     * @param \Nweb\Framework\Application $application
     */
    public function setApplcation (\Nweb\Framework\Application $application)
    {
        $this->application = $application;
    }

    /**
     * @return \Nweb\Framework\Application
     */
    public function getApplication ()
    {
        if (null === $this->application) {
            // throw exception
        }
        return $this->application;
    }

    public function getHttpRequest ()
    {
        return $this->getApplication()->getHttpRequest();
    }

    public function getHttpResponse ()
    {
        return $this->getApplication()->getHttpResponse();
    }

    public function getDispatcher ()
    {
        return $this->getApplication()->getDispatcher();
    }
}