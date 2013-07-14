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
class AutoDiscover extends \Nweb\Framework\Application\Response\Container
{
    /**
     *  @var mixed
     */
    protected $response = null;

    /**
     * @param mixed $response
     */
    public function __construct ($response)
    {
        $this->response = $response;
    }

    /**
     * (non-PHPdoc)
     * @see \Nweb\Framework\Response\Container::render()
     */
    public function render ()
    {
        if (null === $this->response) {
            return '';
        }

        if (is_scalar($this->response)) {
            return (string)$this->response;
        }

        if (is_array($this->response)) {
            reset($this->response);
            $key = strtolower(key($this->response));
            switch ($key) {
                case 'response.json';
                    return json_encode($this->response);
                break;

                default:
                    $view = new \Nweb\Framework\View($this->response);
                    return $view->render();
            }

        }

        if ($this->response instanceof \Nweb\Framework\View) {
            return $this->response->render();
        }


    }
}