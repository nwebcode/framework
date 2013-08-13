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
    /**
     * @var \Nweb\Framework\Config
     */
    protected $config;

    /**
     * @var \Nweb\Framework\Config
     */
    protected $serviceLocator;

    /**
     * @param array $config
     */
    public function __construct (array $config)
    {
        $this->config = new Config($config);
    }

    public function getEventManager ()
    {}

    /**
     * @return \Nweb\Framework\Application\Service
     */
    public function getServiceLocator ()
    {
        if (null === $this->serviceLocator) {
            $this->serviceLocator = new Application\Service\Locator();

            // @todo Read config and add services
        }
        return $this->serviceLocator;
    }


    /**
     */
    public function run ()
    {

    }
}