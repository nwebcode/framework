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
 * Service Locator aware interface
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Service
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
interface LocatorAware
{
    /**
     * @param \Nweb\Framework\Application\Service\Locator $locator
     */
    public function setServiceLocator (Locator $locator);

    /**
     * @return \Nweb\Framework\Application\Service\Locator
     */
    public function getServiceLocator ();
}