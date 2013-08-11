<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Application\Response;

use Nweb\Framework\Application\Controller;

/**
 * Response abstract
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
abstract class ResponseAbstract implements \Nweb\Framework\Application\Response
{
    /**
     * @var \Nweb\Framework\Application\Controller
     */
    protected $controller = null;

    /**
     * (non-PHPdoc)
     * @see \Nweb\Framework\Application\Response::setController()
     */
    public function setController (Controller $obj)
    {
        $this->controller = $obj;
    }

    /**
     * @return \Nweb\Framework\Application\Controller
     */
    public function getController ()
    {
        return $this->controller;
    }
}