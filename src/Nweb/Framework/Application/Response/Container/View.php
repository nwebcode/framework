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
class View extends \Nweb\Framework\Application\Response\Container
{
    /**
     *  @var \Nweb\Framework\View
     */
    protected $view = null;

    /**
     * @param \Nweb\Framework\View $view
     */
    public function __construct (\Nweb\Framework\View $view)
    {
        $this->setView($view);
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
        $viewManager = new \Nweb\Framework\View\Manager();
        $viewManager->setConfig(
            $this->getConfig()
        );
        $viewManager->setView(
            $this->getView()
        );

        return $this->getView()->render();
    }
}