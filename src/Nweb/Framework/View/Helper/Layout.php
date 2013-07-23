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

namespace Nweb\Framework\View;

use \Nweb\Framework\View\Event;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Layout extends \Nweb\Framework\View\Helper
{
    /**
     */
    protected $content;

    /**
     * @return \Nweb\Framework\View\Helper\Layout
     */
    public function __construct ()
    {
        $layout = $this;
        $view = $this->getView();
        $view->getEventManager()->attach(
            Event::EVENT_RENDER_POST, function (&$contents) use ($layout, $view) {



                $view->render($file);
            }
        );
    }

    /**
     * @return \Nweb\Framework\View\Helper\Layout
     */
    public function layout ()
    {
        return $this;
    }

    /**
     * @param string $contents
     */
    public function setContent ($content)
    {
        $this->content = $content;
    }

    /**
     * @param string $contents
     */
    public function getContent ()
    {
        return $this->content;
    }

    /**
     * @return \Nweb\Framework\View\Helper\Layout
     */
    public function layout ()
    {
        return $this;
    }
}