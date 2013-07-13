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
class Dispatcher
{
    public function dispatch ($controller, $action)
    {
        if (!class_exists($controller, true)) {

        }
        do {
            $controllerObj     = new $controller();
            $responseContainer = $controllerObj->dispatch($action);

            if ($forward = ($responseContainer instanceof Forward)) {
                $controller = $responseContainer->getController();
            }

        } while($forward);



    }

}