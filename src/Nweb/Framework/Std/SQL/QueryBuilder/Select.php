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

namespace Nweb\Framework\Std\SQL\QueryBuilder;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
interface Select
{   
    const JOIN_INNER   = 'INNER';
    const JOIN_OUTER   = 'OUTER';
    const JOIN_LEFT    = 'LEFT';
    const JOIN_RIGHT   = 'RIGHT';
    const SQL_WILDCARD = '*';
    
    /**
     */
    public function col ($columns = self::SQL_WILDCARD);

    /**
     */
    public function from ($tables);

    /**
     */
    public function join ($table, $cond, $columns = null, $type = self::JOIN_INNER);

    /**
     */
    public function where ($where, $bind = null)
    {}

    /**
     */
    public function group ($having)
    {}

    /**
     */
    public function having ($having)
    {}

    /**
     */
    public function order ($having)
    {}
}