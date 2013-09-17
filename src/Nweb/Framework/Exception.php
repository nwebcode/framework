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

namespace Nweb\Framework;

/**
 * Exception
 *
 * @category    NwebFramework
 * @package     Exception
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Exception extends \Exception
{
    public function __construct(
        $message = null,
        $code = null,
        $previous = null,
        array $params = null
    ) {
        if (is_array($previous) && null === $params) {
            $params   = $previous;
            $previous = null;
        }
        
        if (null !== $params) {
            $message = vsprintf($message, $params);
        }
        
        parent::__construct($message, $code, $previous);
        
    }
	
}