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

namespace Nweb\Framework\DataBase\MySQL\QueryBuilder;

/**
 * Application
 *
 * @category    NwebFramework
 * @package     Application
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Select
{
    /**
     * @var array
     */
    protected $columns = array();
    
    /**
     * @var array
     */
    protected $from = array();
    
    /**
     * @var join
     */
    protected $join = array();
    
    const JOIN_INNER   = 'INNER';
    const JOIN_OUTER   = 'OUTER';
    const JOIN_LEFT    = 'LEFT';
    const JOIN_RIGHT   = 'RIGHT';
    const SQL_WILDCARD = '*';
    
    /**
     */
    public function col ($columns = self::SQL_WILDCARD)
    {
        $this->columns = array_merge($this->columns, (array)$columns);
    }

    /**
     */
    public function from ($tables)
    {
        if (is_string($columns)) {
            $this->columns[] = $columns;
        } else if (is_array($columns)) {
            $this->columns = array_merge($this->columns, $columns);
        }}

    /**
     */
    public function join ($table, $cond, $columns = null, $type = self::JOIN_INNER)
    {}

    /**
     */
    public function joinInner ($table, $cond, $columns = null)
    {}

    /**
     */
    public function joinOuter ($table, $cond, $columns = null)
    {}

    /**
     */
    public function joinLeft ($table, $cond, $columns = null)
    {}

    /**
     */
    public function joinRight ($table, $cond, $columns = null)
    {}

    /**
     */
    public function where ($where)
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

    /**
     */
    public function limit ($limit)
    {}

    /**
     */
    public function offset ($offset)
    {}

    /**
     */
    public function __toString()
    {
        $sql = '';
    	
    }
}