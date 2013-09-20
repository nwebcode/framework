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

namespace Nweb\Framework\Model;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
abstract class Repository
{
    /**
     */
    public function setDbAdapter ()
    {}

    /**
     */
    public function getDbAdapter ()
    {
    }
}