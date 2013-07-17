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
     *
     */
    protected $responseContainer = null;

    public function setResponseContainer()
    {
    }

    public function get()
    {
        if (null === $this->responseContainer) {
            // get class from config
            $this->getConfig('Controller:Response.Container');

            $this->setResponseContainer(
                new \Nweb\Framework\Application\Response\Container\AutoDiscover()
            );
        }
        return $this->responseContainer;
    }

    public function dispatch ($action)
    {
        $responseContainer = $this->getServiceLocator()->get('\Nweb\Framework\Application\Response\Container');
    }
}