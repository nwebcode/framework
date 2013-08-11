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
class View implements \Nweb\Framework\Event\Aware
{
    /**
     * @var array
     */
    protected $vars = array();

    /**
     * @var array
     */
    protected $callbacks = array();

    /**
     * @var \Nweb\Framework\Event\Manager
     */
    protected $eventManager;

    /**
     * @param array $variables
     * @param array $callbacks
     */
    public function __construct (array $variables = array(), array $callbacks = array())
    {
        if (count($variables) > 0) {
            $this->set($variables);
        }

        if (count($callbacks) > 0) {
            foreach ($callbacks as $name => $callback) {
                $this->addCallback($name, $callback);
            }
        }
    }

    /**
     * @param  string $name
     * @param  array  $args
     * @return mixed
     */
    public function __call ($name, $args)
    {
        return $this->invokeCallback($name, $args);
    }

    /**
    * @param  string $key
    * @param  string $value
    * @return void
    */
    public function __set ($key, $value)
    {
        $this->set($key, $value);
    }

    /**
     * @param  string $key
     * @return mixed
     */
    public function __get ($key)
    {
        return $this->get($key);
    }

    /**
     * @param  string $name
     * @return bool
     */
    public function __isset ($key)
    {
        return $this->has($key);
    }

    /**
     * @param  string $key
     * @return void
     */
    public function __unset ($key)
    {
        $this->del($key);
    }

    /**
     * @param string|array $key
     * @param mixed $value
     * @return void
     */
    public function set ($key, $value = null)
    {
        if (is_array($key) && count($key) > 0 && null === $value) {
            $this->vars = array_merge($this->vars, $key);
        } else if (is_scalar($key)) {
            $this->vars[$key] = $value;
        } else {
            // @todo throw exception
        }
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get ($key, $default = null)
    {
        if (isset($this->vars[$key])) {
            return $this->vars[$key];
        }
        return $default;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has ($key)
    {
        return isset($this->vars[$key]);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function is ($key, $value)
    {
        return isset($this->vars[$key]) && $this->vars[$key] == $value;
    }

    /**
     * @param string $key
     * @return void
     */
    public function del ($key)
    {
        if (isset($this->vars[$key])) {
             unset($this->vars[$key]);
        }
    }

    /**
     * @param string $name
     * @param callable $callback
     * @param bool $force
     */
    public function addCallback ($name, $callback, $force = false)
    {
        if (is_scalar($name) && is_callable($callback)) {
            if ($force || !isset($this->callbacks[$name])) {
                if (is_array($callback) && is_object($callback[0]) && $callback[0] instanceof View\Helper) {
                    $callback[0]->setView($this);
                }
                $this->callbacks[$name] = $callback;
            }
        } else {
            // @todo throw exception
        }
    }

    /**
     * @param string $name
     * @param View\ViewCallable $callback
     * @param bool $force
     * @return void
     */
    public function addHelper ($name, View\Helper $helper, $force = false)
    {
        if (is_scalar($name)) {
            if ($force || !isset($this->callbacks[$name])) {
                $helper->setView($this);
                $this->callbacks[$name] = array($helper, $name);
            }
        } else {
            // @todo throw exception
        }
    }

    /**
     * @param string $name
     */
    public function hasHelper ($name)
    {
        return isset($this->callbacks[$name]) && $this->callbacks[$name][0] instanceof View\Helper;
    }

    /**
     * @param string $name
     */
    public function hasCallback ($name)
    {
        return isset($this->callbacks[$name]);
    }

    /**
     * @param string $name
     * @param array $args
     * @return mixed
     */
    public function invokeCallback ($name, array $args = array())
    {
        if (isset($this->callbacks[$name])) {
            return call_user_func_array($this->callbacks[$name], $args);
        }
        // @todo throw exception
    }

    /**
     * @return \Nweb\Framework\Event\Manager
     */
    public function getEventManager ()
    {
        if (isset($this->eventManager)) {
            $this->setEventManager(new \Nweb\Framework\Event\Manager(__CLASS__));
        }
    }

    /**
     * @param \Nweb\Framework\Event\Manager $manager
    */
    public function setEventManager (\Nweb\Framework\Event\Manager $manager)
    {
        $this->eventManager = $manager;
    }

    /**
     * @param string $file
     * @return string
     */
    protected function readFile ($file)
    {
        $this->getEventManager()->trigger(
            View\Event::EVENT_READ_FILE_PRE,
            array(&$file)
        );

        if (!is_file($file)) {
            // @todo throw exception
        }

        ob_start();
        include $file;
        $contents = ob_get_clean();

        $this->getEventManager()->trigger(
            View\Event::EVENT_READ_FILE_POST,
            array(&$contents)
        );
    }

    /**
     * @param string $file
     * @return string
     */
    public function render ($file)
    {
        $this->getEventManager()->trigger(
            View\Event::EVENT_RENDER_PRE,
            array(&$file)
        );

        $contents = $this->readFile($file);

        $this->getEventManager()->trigger(
            View\Event::EVENT_RENDER_POST,
            array(&$contents)
        );

        return $contents;
    }
}