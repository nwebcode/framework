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

namespace Nweb\Framework\Router;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Route implements RouteInterface
{
    protected $pattern;
    protected $handler;
    protected $assemble;
    protected $params = array();
    
    /**
`     * @param unknown $pattern
     * @param unknown $handler
     * @param array $assemble
     */
    public function __construct ($pattern, $handler, $assemble = null)
    {
        $this->pattern  = $pattern;
        $this->handler  = $handler;
        if ($assemble && is_callable($assemble)) {
            $this->assemble = $assemble;
        }
    }

    /**
     * @param string $uri
     * @return bool
     */
    public function match ($uri)
    {
        if (is_callable($this->pattern)) {
            return call_user_func($this->pattern, $uri);
        }
        
        if (strcasecmp($uri, $this->pattern) == 0) {
            return true;
        }
        
        if (is_array($this->pattern)) {
            if (isset($this->pattern[0])) {
                $regex = $this->pattern[0];
            } else if (isset($this->pattern['regex'])) {
                $regex = $this->pattern['regex'];
            }

            if (isset($this->pattern[1])) {
                $names = $this->pattern[1];
            } else if (isset($this->pattern['names'])) {
                $names = $this->pattern['names'];
            }
        } else {
            $regex = $this->pattern;
            $names = array();
        }
        
        if (preg_match($regex, $uri, $matches)) {
            $this->params = array_combine ($names, $matches);
            return true;
        }
        
        return false;
    }
    
    /**
     * @param string array $params
     * @return string
     */
    public function assemble (array $params = null)
    {
        if (null !== $this->assemble) {
            return call_user_func($this->assemble, $params);
        }
    }
    
    /**
     * @return mixed
    */
    public function getHandler ()
    {
        return $this->handler;
    }
    
    /**
     * @return array
     */
    public function getParams ()
    {
        return $this->params;
    }
}