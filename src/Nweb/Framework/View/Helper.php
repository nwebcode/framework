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

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
abstract class Helper
{
    /**
     * @var \Nweb\Framework\View
     */
    protected $view;

    /**
     * (non-PHPdoc)
     * @see \Nweb\Framework\View\ViewCallable::setView()
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
}