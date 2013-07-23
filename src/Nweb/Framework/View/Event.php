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

namespace Nweb\Framework\View;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     View
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
interface Event
{
    const EVENT_RENDER_PRE     = 'view.render.pre';
    const EVENT_RENDER_POST    = 'view.render.post';
    const EVENT_READ_FILE_PRE  = 'view.readfile.pre';
    const EVENT_READ_FILE_POST = 'view.readfile.post';
}