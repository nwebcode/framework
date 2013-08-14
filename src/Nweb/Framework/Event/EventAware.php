<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Event
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
 * @package     Event
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
interface EventAware
{
    /**
     * @return \Nweb\Framework\Event\Manager
     */
    public function getEventManager ();

    /**
     * @param \Nweb\Framework\Event\Manager $manager
     */
    public function setEventManager (\Nweb\Framework\Event\Manager $manager);
}