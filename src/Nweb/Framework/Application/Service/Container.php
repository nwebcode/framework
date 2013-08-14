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
 * Service Container
 *
 * @category    NwebFramework
 * @package     Application
 * @subpackage  Service
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Container
{
    /**
     * @var array
     */
    protected $name;

    /**
     * @var array
     */
    protected $params = array();

    /**
     * @var bool
     */
    protected $shared = true;

    /**
     * @param string $name
     * @return bool
     */
    public function __construct ($name, array $params = null)
    {}

    /**
     * @param bool $flag
     */
    public function setShared ($flag = true)
    {
        $this->shared = $flag;
    }

    /**
     * @param bool
     */
    public function isShared ()
    {
        return $this->shared;
    }

    /**
     * @param bool $flag
     */
    public function addMethodCall ($name, array $params = array())
    {}
}