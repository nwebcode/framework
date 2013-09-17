<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Exception
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\View;

/**
 * Exception
 *
 * @category    NwebFramework
 * @package     Exception
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Exception extends \Nweb\Framework\Exception
{
	const FILE_NOT_FOUND      = 'View script "%s" not found';
	const FILE_NOT_FOUND_CODE = 229523001;
}