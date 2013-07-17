<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     View
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
 * @package     View
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class View
{
    /**
     * @var array
     */
    protected $variables = array();

    /**
     * @var array
     */
    protected $functions = array();


    /**
     * @param array $config
     */
    public function __construct (array $assign = array())
    {}

    /**
     */
    public function assign ($key, $value)
    {
        if (is_array($key)) {
            $this->variables = array_merge($this->variables, $key);
        } else if (is_scalar($key)) {
            $this->variables[$key] = $value;
        } else {
            // @todo throw exception
        }
    }

    /**
     */
    public function addFunction ($name, $callback)
    {
        if (is_scalar($name) && is_callable($callback)) {
            $this->helpers[$name] = $callback;
        } else {
            // @todo throw exception
        }
    }

    /**
     */
    public function render ($file)
    {}
}