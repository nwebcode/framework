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

namespace Nweb\Framework\Application\Response\Container;

/**
 * Response container view
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class ViewArray extends \Nweb\Framework\Application\Response\Container
{
    /**
     *  @var \Nweb\Framework\View
     */
    protected $view = null;

    /**
     * @param array $assign
     */
    public function __construct (array $assign = array())
    {
        $this->setView(new \Nweb\Framework\View($assign));
    }

    /**
     * @param \Nweb\Framework\View $view
     */
    public function setView (\Nweb\Framework\View $view)
    {
        $this->view = $view;
    }

    /**
     * @return \Nweb\Framework\View
     */
    public function getView ()
    {
        return $this->view;
    }

    /**
     * (non-PHPdoc)
     * @see \Nweb\Framework\Response\Container::render()
     */
    public function render ()
    {
        return $this->getView()->render();
    }
}