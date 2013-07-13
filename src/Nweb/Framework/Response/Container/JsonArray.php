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

namespace Nweb\Framework\Response\Container;

/**
 * Response container view
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class JsonArray implements \Nweb\Framework\Response\Container
{
    /**
     *  @var array
     */
    protected $json = array();

    /**
     * @param array $json
     */
    public function __construct (array $json = array())
    {
        $this->json = $json;
    }

    /**
     * (non-PHPdoc)
     * @see \Nweb\Framework\Response\Container::render()
     */
    public function render ()
    {
        return json_encode($this->json);
    }
}