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

namespace Nweb\Framework\Http;

/**
 * Response HTTP
 *
 * @category    NwebFramework
 * @package     Response
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 */
class Response
{
    /**
     * @var int
     */
    protected $code = 200;

    /**
     * @var array
     */
    protected $headers = array();

    /**
     * @var string
     */
    protected $body = '';

    /**
     * @param int $code
     */
    public function setCode ($code)
    {
        $this->code = (int)$code;
    }

    /**
     * @param string $header
     * @param string $value
     * @param bool $replace
     */
    public function setHeader ($header, $value, $replace = true)
    {
        if (!isset($this->headers[$header]) || $replace) {
            $this->headers[$header] = $value;
        }

        // HTTP/1.1 200 OK
    }

    /**
     * @param string $header
     * @param string $value
     * @param bool $replace
     */
    public function setCookie (Response\Cookie $cookie)
    {
    }

    /**
     * @param string $contents
     */
    public function setBody ($contents)
    {
        if (is_scalar($contents)) {
            $this->body = (string)$contents;
        } else {
            // @todo exception
        }
    }

    /**
     *
     */
    public function send ()
    {
        $protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';
        $desc     = (isset(Response\Code::$httpCodes[$this->code])) ? Response\Code::$httpCodes[$this->code] : '';
        header($protocol . ' ' . $this->code . ' ' . $desc);

        $sendCode = false;
        foreach ($this->headers as $header => $value) {
            header(($header . ': ' . $value), true);
        }
    }
}