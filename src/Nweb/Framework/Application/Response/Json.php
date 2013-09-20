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

namespace Nweb\Framework\Application\Response;

/**
 * Response container interface
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Json extends ResponseAbstract
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $assign
     * @param string $file
     */
    public function __construct (array $data = array())
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function send ()
    {
        $response = $this->getController()->getHttpResponse();
        $response->setBody(json_encode($this->data));
        $response->send();
    }
}